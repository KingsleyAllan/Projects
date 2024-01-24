import React, { useEffect, useState } from 'react';
import Card from './Card';
import axios from 'axios';
import { Link } from 'react-router-dom';

const Shows = () => {
  const [showsItems, setShowItems] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get('http://localhost:4000/shows');
        setShowItems(response.data);
      } catch (error) {
        console.log('Error fetching shows', error);
      }
    };

    fetchData();
  }, []);

  return (
    <div style={{ backgroundColor: 'red' }}>
      <h2 style={{ color: '#330A0B', textAlign: 'center', fontWeight: 'bolder' }} className='pt-5 fs-1'>
        ALL SHOWS
      </h2>

      <div className='card-list'>
        {showsItems.map((show) => (
          <Link to={`/shows/${show._id}`} key={show._id}>
            {/* Link to the show detail page */}
            <Card data={show} />
          </Link>
        ))}
      </div>
    </div>
  );
};

export default Shows;
