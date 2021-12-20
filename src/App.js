import React, {useState, useEffect} from 'react';
import './App.css';
import Loading from './components/Loading';
import Tours from './components/Tours';


const url = 'https://api.github.com/users'
function App() {
  const [loading, setLoading] = useState(true);
  const [tours, setTour] = useState([])


  const removeTour = (id)=>{
    const newTours = tours.filter((tour)=> tour.id !== id)
    setTour(newTours)
  }

  const fetchTour = async()=>{
    setLoading(true)

    try{

      const response = await fetch(url);
      const tours = await response.json()
     // console.log(tours)
     setLoading(false)
     setTour(tours)
    }
    catch(error){
      setLoading(false)
      console.log(error)
    }

  }

  useEffect(() => {
    fetchTour()
  }, [])

  if(loading){
    return (
      <div className="App">
        <Loading/>
      </div>
    );
  }

  if(tours.length == 0){
    return(
      <div>
        <h2>No tours left</h2>
        <button className='btn' onClick={fetchTour}>Refresh</button>
      </div>
    )
  }
  return <Tours tours = {tours} removeTour = {removeTour}/>

}

export default App;
