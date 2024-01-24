import React, { useState } from 'react';
import './Index.css';

const Card = ({ data }) => {
  const [isHovered, setIsHovered] = useState(false);

  return (
    <div
      className={`card ${isHovered ? 'hovered' : ''}`}
      onMouseEnter={() => setIsHovered(true)}
      onMouseLeave={() => setIsHovered(false)}
    >
      <img src={process.env.PUBLIC_URL + '/Images/' + data.imageUrl} alt={data.title} />
      <div className="card-overlay">
        <h2>{data.title}</h2>
      </div>
    </div>
  );
};

export default Card;