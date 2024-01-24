// SearchResults.js
import React, { useEffect, useState } from 'react';
import { Link, useLocation } from 'react-router-dom';
import axios from 'axios';
import Card from './Card';

const SearchResults = () => {
  const location = useLocation();
  const queryParams = new URLSearchParams(location.search);
  const searchQuery = queryParams.get('query');
  const [searchResults, setSearchResults] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
        try{
            const response = await axios.get(`http://localhost:4000/shows?query=${searchQuery}`);
            setSearchResults(response.data);
        } catch (error) {
            console.log('Error finding the show')
        }
    };

    fetchData();
  }, [searchQuery]);

  return (
    <div style={{ backgroundColor: 'red' }}>
      <h2 style={{ color: '#330A0B', textAlign: 'center', fontWeight: 'bolder' }} className='pt-5 fs-1'>
        SEARCH RESULTS FOR "{searchQuery.toUpperCase()}"
      </h2>

      <div className='card-list'>
        {searchResults.map((show) => (
          <Link to={`/shows/${show._id}`} key={show._id}>
            {/* Link to the show detail page */}
            <Card data={show} />
          </Link>
        ))}
      </div>
    </div>
  );
};

export default SearchResults;
