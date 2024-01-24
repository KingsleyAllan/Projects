import React, { useState, useEffect } from 'react';
import axios from 'axios';
import Carousel from 'react-bootstrap/Carousel';
import { Link } from 'react-router-dom'; // Import Link component
import 'bootstrap/dist/css/bootstrap.min.css';
import './Index.css';

const MyCarousel = () => {
  const [carouselItems, setCarouselItems] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get('http://localhost:4000/carousel');
        setCarouselItems(response.data);
      } catch (error) {
        console.error('Error fetching carousel items:', error);
      }
    };

    fetchData();
  }, []);

  return (
    <Carousel>
      {carouselItems.map((item) => (
        <Carousel.Item key={item._id}>
          {/* Wrap the entire item with Link */}
          <Link to={`/PorpularShows/${item._id}`}>
            <img
              className="d-block w-100 dark-image"
              src={process.env.PUBLIC_URL + '/Images/' + item.imageUrl}
              alt={item.title}
            />
            <Carousel.Caption>
              <h2 style={{ fontWeight: 'bolder', fontSize: '3em' }}>{item.title}</h2>
              <p>{item.description}</p>
            </Carousel.Caption>
          </Link>
        </Carousel.Item>
      ))}
    </Carousel>
  );
};

export default MyCarousel;