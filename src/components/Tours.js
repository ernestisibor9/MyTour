import React from 'react'
import Tour from './Tour'

function Tours({tours, removeTour}) {
    return (
        <div>
            <h1>Our Tours</h1>
            {
                tours.map((tour)=>{
                    return(
                        <div  key = {tour.id}>
                             <Tour key = {tour.id} {...tour} removeTour = {removeTour} />
                        </div>
                    )
                })
            }
            
        </div>
    )
}

export default Tours
