import React from 'react'

const Powerful = () => {

    return (
        <section className="powerful">
            <div className="container">
                <div className="grid algCenter">
                    <div className="col-lg-6 col-xs-12">
                        <div className="multimedia">
                            <img src='/images/illustration-laptop-desktop.svg' alt="Powerful tooling" />
                        </div>
                    </div>
                    <div className="col-lg-6 col-xs-12">
                        <div className="cont-info">
                            <h2><strong>Free, open , simple</strong></h2>
                            <p>Blogr is a free and open source application backend by a large community of helpful developers. It supports features such as code syntax higlighting. RSS feeds, social media integration, third-party commenting tools, and works seamlessly with Google Analytics. The architecture is clean and relatively easy to learn.</p>
                        </div>
                        <div className="cont-info">
                            <h2><strong>Powerful tooling</strong></h2>
                            <p>Batteries included. We built a simple and straightforward CLI tool that makes customization and deployment a breeze, but capable of producing even the most complicated sites.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}

export default Powerful