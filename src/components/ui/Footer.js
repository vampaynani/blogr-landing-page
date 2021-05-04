import React from 'react'

const Footer = () => {
    return (
        <footer className="footer">
            <div className="container">
                <div className="grid">
                    <div className="col-lg-4 col-xs-12">
                        <div className="multimedia logo">
                            <img src="/images/logo.svg" alt="logo"/>
                        </div>
                    </div>
                    <div className="col-lg-2 col-xs-12">
                        <h5>Product</h5>
                        <ul>
                            <li><a href="index.html">Overview</a></li>
                            <li><a href="index.html">Pricing</a></li>
                            <li><a href="index.html">Marketplace</a></li>
                            <li><a href="index.html">Features</a></li>
                            <li><a href="index.html">Interactions</a></li>
                        </ul>
                    </div>
                    <div className="col-lg-2 col-xs-12">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="index.html">About</a></li>
                            <li><a href="index.html">team</a></li>
                            <li><a href="index.html">Blog</a></li>
                            <li><a href="index.html">Careers</a></li>
                        </ul>
                    </div>
                    <div className="col-lg-2 col-xs-12">
                        <h5>Connect</h5>
                        <ul>
                            <li><a href="index.html">Contact</a></li>
                            <li><a href="index.html">Newsletter</a></li>
                            <li><a href="index.html">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    )
}

export default Footer