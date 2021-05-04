import React from 'react'
import Header from './ui/Header'
import Footer from './ui/Footer'
import Hero from './sections/Hero'
import Future from './sections/Future'
import State from './sections/State'
import Powerfuil from './sections/Powerful'

const Main = () => {
    return (
        <main className="wrapper">
            <Header />
            <Hero />
            <Future />
            <State />
            <Powerfuil />
            <Footer />
        </main>
    )
}

export default Main