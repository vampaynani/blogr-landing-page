import React from 'react'
import ImgBackground from '../../img/bg-pattern-circles.svg'

const State = () => {
    return (
        <section className="state">
            <div className="container" >
                <div className="grid algCenter">
                    <div className="col-lg-6 col-xs-12">
                        <div className="multimedia">
                            <img src="/images/illustration-phones.svg" alt="state of the Art Infrastructure" />
                        </div>
                    </div>
                    <div className="col-lg-6 col-xs-12">
                        <div className="cont-info">
                            <h2><strong>State of the Art Infrastructure</strong></h2>
                            <p>With reliability and speed in mind, worldwide data centers provide the backbone for ultra-fast connectivity. This ensures your site will load instantly. no matter where your readers are, keeping your site competitive. </p>
                        </div>
                    </div>
                </div>
            </div>
            <style jsx="true">{`
                .state::before {
                    position: absolute;
                    content: '';
                    width: 100%;
                    height: 70%;
                    background: #1F3F5B url(${ImgBackground}) no-repeat;
                    background-position-y: bottom;
                    background-position-x: left;
                    background-size: 50%;
                    top: 50%;
                    border-top-right-radius: 100px;
                    border-bottom-left-radius: 100px;
                    transform: translate(0%, -50%);
                }
            `}</style>
        </section>
    )
}

export default State