import React, {useEffect, useRef} from 'react'

const menuOptions = [
    {
        id: 1,
        name: 'Product',
        options: [
            {
                id: 1,
                title: 'Overview',
            },
            {
                id: 2,
                title: 'Pricing',
            },
            {
                id: 3,
                title: 'Marketplace',
            },
            {
                id: 4,
                title: 'Features',
            },
            {
                id: 5,
                title: 'Interactions',
            }
        ]
    },
    {
        id: 2,
        name: 'Company',
        options: [
            {
                id: 1,
                title: 'About',
            },
            {
                id: 2,
                title: 'team',
            },
            {
                id: 3,
                title: 'Blog',
            },
            {
                id: 4,
                title: 'Careers',
            }
        ]
    },
    {
        id: 3,
        name: 'Conect',
        options: [
            {
                id: 1,
                title: 'Contact',
            },
            {
                id: 2,
                title: 'Newsletter',
            },
            {
                id: 3,
                title: 'Linkedin',
            }
        ]
    }
]

const Navbar = (props) => {

    let item = useRef(null)
    let windowWidth = window.innerWidth;

    useEffect(() => {

        if( windowWidth <= 768) {

            if(props.active) {
                item.style.display = 'flex';
            }else {
                item.style.display = 'none';
            }
        }


    })

    return (
        <nav ref={elem => item = elem}>
            <ul>
                {menuOptions.map((item) => (
                    <li key={item.id}>
                        <p>{item.name}</p>
                        <div className="dropdown">
                            <ul>
                                {
                                    item.options.map((itemOption) => (
                                        <li key={itemOption.id}>{itemOption.title}</li>
                                    ))
                                }
                            </ul>
                        </div>
                    </li>
                ))}
            </ul>
            <div className="botones">
                <button className="boton secundario">Login</button>
                <button className="boton">Sing Up</button>
            </div>
        </nav>
    )
}

export default Navbar