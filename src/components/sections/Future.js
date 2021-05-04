import React from 'react'

const Future = () => {
    return (
        <section className="future" >
            <div className="container">
                <h2> <strong>Designed for the future</strong> </h2>
                <div className="grid algCenter">
                    <div className="col-lg-6 col-xs-12">
                        <div className="cont-info">
                            <h4><strong>Introducing an extensible editor</strong></h4>
                            <p>Blogr features an exceeedingly intuitive interface which let you focus on one thing: creating content. The editor supports management of multiple blogs and allows easy manipulation of embeds such as images, video and Markdown. Extensibility with plugins and themes provide easy ways to add functionality or change the looks of a blog.</p>
                            <h4><strong>Robust content management</strong></h4>
                            <p>Flexible content management enables users to easily move through post. Increase the usability of your blod by adding customized categories, sections, format, or flow. With this functionality, you're in full control.</p>
                        </div>
                    </div>
                    <div className="col-lg-6 col-xs-12">
                        <div className="multimedia">
                            <picture>
                                <source media="(max-width:769px)" srcSet="/images/illustration-editor-mobile.svg" alt="designed for the future" />
                                <img src="/images/illustration-editor-desktop.svg" alt="designed for the future" />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}

export default Future