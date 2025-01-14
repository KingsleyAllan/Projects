import React from 'react';
import "../App.css";

const Body = () => {
    const handleEmailClick = () => {
        const email = "kingsleyallan125@gmail.com";
        const subject = "I am looking for a master of code. Let's talk";
        window.location.href = `mailto:${email}?subject=${encodeURIComponent(subject)}`;
    };
    
    return (
        <div className="body">
            <section id="#" className="container-fluid d-flex align-items-center about-section">
                <div className="about-content">
                    <div className="left d-lg-block d-none">
                        <h1 className="main-title">
                            FULL-STACK <span>SOFTWARE</span> DEVELOPER
                        </h1>
                        </div>
                        <div className="right d-lg-block d-none">
                        <p className="description">
                            I am a software developer based in Nairobi, Kenya. I have worked on a wide range of projects each with different programming languages. I love neat and minimal but sometimes I crave brutalist design. I love music, literature, and art.
                        </p>
                        <button className="contact-button rounded-pill">Contact Me</button>
                        </div>
                        <div className="d-lg-none d-block">
                        <h1 className="main-title">
                            FULL-STACK <span>SOFTWARE</span> DEVELOPER
                        </h1>
                        <p className="description">
                            I am a software developer based in Nairobi, Kenya. I have worked on a wide range of projects each with different programming languages. I love neat and minimal but sometimes I crave brutalist design. I love music, literature, and art.
                        </p>
                        <button className="contact-button rounded-pill">
                        CONTACT ME
                        </button>
                    </div>
                </div>
            </section>
            <section id='work' className='container-fluid d-flex align-items-center p-5'>
                <div className="row justify-content-md-center gx-3">
                    <div className="col-lg-5">
                        <h5 className='main-title red'>HELLO I AM ALLAN</h5>
                        <p className="name ms-5 fs-5" style={{color: 'rgba(255, 0, 0, 0.872)'}}>
                            allan kingsley
                        </p>
                        <p className='description fs-2' style={{color: 'rgba(255, 0, 0, 0.872)'}}>
                            expertise in both front-end & back-end I create full-stack web applications from the ground up. By understanding user experience, 
                            I design and create intuitive & visually stunning interfaces using HTML, CSS, Bootstrap and frameworks such as React and Javascript.
                            I am profecient in server-side languages like Node.Js, PHP and Laravel pairing them with databases such as MySQL and MongoDB tying
                            all this together with APIs to connect differentpart ot the applications.
                        </p>
                    </div>
                    <div className="col-lg-4 offset-1">
                        <table>
                            <thead>
                            <tr>
                                <th className='main-title red' scope="col">PROJECTS</th>
                            </tr>
                            </thead>
                            {/* <hr></hr> */}
                            <tbody>
                                <tr>
                                    <a href='http://drivingnirvana.onlinewebshop.net/' target="_blank" rel="noopener noreferrer" className='description text-decoration-none red'>driving nirvana</a>                            
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="contact" className="container-fluid d-flex p-5 about-section">
  <div className="about-content">
    {/* Left Section */}
    <div className="left d-lg-block d-none me-5">
      <h1 className="main-title" style={{ fontSize: "10rem" }}>
        WANT <span>TO </span>START <span>A </span>PROJECT?
      </h1>
      <p className="main-title pt-4 ms-5 fs-3">or just say hello</p>
    </div>

    {/* Right Section */}
    <div className="right d-lg-block d-none align-items-center">
      <button className="contact-button rounded-pill mt-5" onClick={handleEmailClick}>
        kingsleyallan125@gmail.com
      </button>

      
      <div className="description social-links mt-t pt-5 ">
        <a href="https://www.linkedin.com/in/allankingsley/" target="_blank" rel="noopener noreferrer" className="me-3">
          linkedin
        </a>
        <a href="https://github.com/KingsleyAllan" target="_blank" rel="noopener noreferrer" className="me-3">
          github
        </a>
        <a href="https://www.instagram.com/kingsley_i_guess" target="_blank" rel="noopener noreferrer">
          INSTAGRAM
        </a>
      </div>
    </div>

    {/* Mobile View */}
    <div className="d-lg-none d-block">
      <h1 className="main-title">
        FULL-STACK <span>SOFTWARE</span> DEVELOPER
      </h1>
      <p className="description">
        I am a software developer based in Nairobi, Kenya. I have worked on a wide range of projects each with
        different programming languages. I love neat and minimal but sometimes I brutalist design. I love music,
        literature, and art.
      </p>
      <button className="contact-button rounded-pill">Contact Me</button>
    </div>
  </div>
</section>


        </div>
    )    
}

export default Body;

