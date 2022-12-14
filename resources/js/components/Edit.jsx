import React from 'react';
import ReactDOM from 'react-dom';

function Edit() {
  
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Edit Component</div>

                        <div className="card-body">I'm an Edit component!</div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Edit;

if (document.getElementById('edit')) {
    ReactDOM.render(<Edit/>,document.getElementById("edit"));
}