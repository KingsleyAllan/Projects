import React, { useEffect, useState } from 'react';
import axios from 'axios';
import MyCarousel from './CarouselItem';
import Card from './Card';
import './Index.css';
import { Link } from 'react-router-dom';

const Home = () => {
  const [section1cards, setSectionCards1] = useState([]);
  const [section2cards, setSectionCards2] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response1 = await axios.get('http://localhost:4000/cards/section1');
        setSectionCards1(response1.data);

        const response2 = await axios.get('http://localhost:4000/cards/section2');
        setSectionCards2(response2.data);
      } catch (error) {
        console.log('Error fetching card data', error);
      }
    };

    fetchData();
  }, []);

  return (
    <>
    <div>
      <MyCarousel/>
    </div><br/><br/>

    <h2 style={{ fontWeight: 'bolder', color:'white', paddingLeft:'20px'}}>LATEST SHOWS</h2>

    <div className="card-list">
      {section1cards.map((card) => (
        <Link to={`/cards/${card._id}`} key={card._id}>
          <Card data={card} />
        </Link>
      ))}
    </div><br/><br/>

    <h2 style={{ fontWeight: 'bolder', color:'white', paddingLeft:'20px'}}>RECCOMENDED</h2>

    <div className="card-list">
      {section2cards.map((card) => (
        <Link to={`/cards/${card._id}`} key={card._id}>
          <Card data={card} />
        </Link>
      ))}
    </div>
    </>
  );
};

export default Home;