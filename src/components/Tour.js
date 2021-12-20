import React, {useState} from 'react'

function Tour({id, login, avatar_url, html_url, removeTour}) {
    console.log(removeTour)
    const[mytext, setMytext] = useState(true)
    return (
        <div>
            <img src = {avatar_url} alt = {login}/>
            <h3>{login}</h3>
            <h3>{html_url}</h3>
            <button className='btn' onClick = {()=>setMytext(!mytext)}>{mytext?html_url: <h1>No info about you</h1>}</button>
            <button className='btn' onClick={(()=>removeTour(id))}>Delete</button>
        </div>
    )
}

export default Tour
