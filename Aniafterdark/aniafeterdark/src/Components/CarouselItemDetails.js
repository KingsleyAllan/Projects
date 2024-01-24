import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Card, Container, Row, Col, Spinner } from 'react-bootstrap';
import { FaPlay, FaPause, FaVolumeUp, FaVolumeMute } from 'react-icons/fa';
import { useParams } from 'react-router-dom';
import ReactPlayer from 'react-player';
import './Index.css';

const CarouselShowDetail = () => {
  const { id } = useParams();
  const [show, setShow] = useState(null);
  const [selectedEpisode, setSelectedEpisode] = useState(null);
  const [isPlaying, setIsPlaying] = useState(true);
  const [isMuted, setIsMuted] = useState(false);
  const [sortedSeasons, setSortedSeasons] = useState([]); // Declare sortedSeasons here

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`http://localhost:4000/carousel/${id}`, {
          params: {
            include: 'episodes',
          },
        });
        setShow(response.data);
        const seasons = [...new Set(response.data.episodes.map((episode) => episode.season))];
        const sortedSeasons = seasons.sort((a, b) => b - a); // Sort seasons in descending order
        setSortedSeasons(sortedSeasons); // Set the sorted seasons
      } catch (error) {
        console.error('Error fetching show details:', error);
      }
    };

    fetchData();
  }, [id]);

  const handleEpisodeClick = (episode) => {
    setSelectedEpisode(episode);
  };

  const handlePlayPauseToggle = () => {
    setIsPlaying((prevIsPlaying) => !prevIsPlaying);
  };

  const handleVolumeToggle = () => {
    setIsMuted((prevIsMuted) => !prevIsMuted);
  };

  const CustomControls = () => (
    <div className="custom-controls">
      <button onClick={handlePlayPauseToggle}>
        {isPlaying ? <FaPause /> : <FaPlay />}
      </button>
      <button onClick={handleVolumeToggle}>
        {isMuted ? <FaVolumeMute /> : <FaVolumeUp />}
      </button>
    </div>
  );

  return (
    <Container fluid className='d-flex flex-column h-100'>
      {show && (
        <>
          <Row> 
            <Col xs={12}>
              {selectedEpisode ? (
                <ReactPlayer
                  width="100%"
                  height="87%"
                  url={`/Videos/${selectedEpisode.videoPath}`}
                  playing={isPlaying}
                  muted={isMuted}
                  controls
                  controlsList="nodownload" // Disable download button
                  config={{
                    file: {
                      attributes: {
                        controlsList: 'nodownload',
                      },
                    },
                  }}
                  customControls={<CustomControls />}
                />
              ) : (
                <Card className='my-card' style={{ margin: 0, padding: 0 }}>
                  <Card.Img style={{ borderRadius: '0' }} variant="top" src={process.env.PUBLIC_URL + '/Showdetailpics/' + show.detailImageUrl} />
                </Card>
              )}
            </Col>
          </Row>

             {/* Display seasons in descending order */}
          {sortedSeasons.map((season, index) => (
            <React.Fragment key={season}>
              <Row className='pt-4'>
                <Col xs={12}>
                  {/* Display the selected season number */}
                  <h2 className='text-white'>Season {season}</h2>
                </Col>
              </Row>

              <Row className="d-flex flex-wrap">
                {/* Display episodes for the current season */}
                {show.episodes
                  .filter((episode) => episode.season === season)
                  .map((episode) => (
                    <Col xs={12} md={6} key={episode._id}>
                      {/* Use xs={12} to stack on top for extra-small screens */}
                      <Card
                        style={{ minWidth: '99%', cursor: 'pointer' }}
                        className={`bg-black text-white ${selectedEpisode === episode ? 'episode-active' : 'episode-hover'}`}
                        onClick={() => handleEpisodeClick(episode)}
                      >
                        <Card.Body>
                          <Card.Title className='fs-4'>
                            Episode {episode.episode}
                          </Card.Title>
                          <Card.Text>
                            {episode.description}
                          </Card.Text>
                        </Card.Body>
                      </Card>
                    </Col>
                  ))}
              </Row>
              {index < sortedSeasons.length - 1 && <hr className="my-4" style={{ color: "white" }} />} {/* Add horizontal line between seasons */}
            </React.Fragment>
          ))}
        </>
      )}

      {!show && (
        <div className="d-flex justify-content-center align-items-center flex-grow-1" style={{ height: '100vh' }}>
          <Spinner animation="border" role="status">
            <span className="visually-hidden">Loading...</span>
          </Spinner>
          <p className="ms-2 text-white fs-3">Loading...</p>
        </div>
      )}
    </Container>
  );
};

export default CarouselShowDetail;