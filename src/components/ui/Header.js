import React from 'react'

const Header = () => {

    return (
        <header className="header">
            <div className="container">
                <div className="menu">
                    <div className="multimedia logo">
                        <img src="/images/logo.svg" alt="logo"/>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <p>Product</p>
                                <div className="dropdown">
                                    <ul>
                                        <li>Lorem</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                    </ul>
                                </div>
                                <img src="/images/icon-arrow-light.svg" alt="Product" />
                            </li>
                            <li>
                                <p>Company</p>
                                <div className="dropdown">
                                    <ul>
                                        <li>Lorem</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                    </ul>
                                </div>
                                <img src="/images/icon-arrow-light.svg" alt="Product" />
                            </li>
                            <li>
                                <p>Connect</p>
                                <div className="dropdown">
                                    <ul>
                                        <li>Lorem</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                    </ul>
                                </div>
                                <img src="/images/icon-arrow-light.svg" alt="Product" />
                            </li>
                        </ul>
                        <div className="botones">
                            <button className="boton secundario">Login</button>
                            <button className="boton">Sing Up</button>
                        </div>
                    </nav>
                    <button className="hamburguesa" >
                        <span></span>
                    </button>
                </div>
            </div>
        </header>
    )
}

export default Header