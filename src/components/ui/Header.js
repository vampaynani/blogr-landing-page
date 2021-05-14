import React, {useState, useEffect} from 'react'
import Navbar from './Navbar'

const Header = () => {

    const [menuStatus , setMenuStatus] = useState(false);

    useEffect(() => {
        window.addEventListener('scroll', function() {
            if( menuStatus === true ) {
                setMenuStatus(false)
            }
        });
    })

    const showMenu = () => {
        setMenuStatus( !menuStatus );
    }

    return (
        <header className="header">
            <div className="container">
                <div className="menu">
                    <div className="multimedia logo">
                        <img src="/images/logo.svg" alt="logo"/>
                    </div>
                    <Navbar active={menuStatus} />
                    <button className={`hamburguer ${menuStatus ? 'active' : ''} `} onClick={showMenu}>
                        <span></span>
                    </button>
                </div>
            </div>
        </header>
    )
}

export default Header