<nav class="navbar shadow-sm sticky-top navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
    <a class="navbar-brand" href="{{url('/')}}">
    
    <span class="fw-bolder dynamic-text">MR-X</span>
</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/resume')}}">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/projects')}}">Projects</a>
                </li>
                <li class="nav-contact">
                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="scroll-container">
    <div class="scroll-messages">
        <p>🔥 Welcome to MR-X's world! | 🚀 Stay tuned for exciting updates! | 😊 Enjoy your time here! | 🌍 Explore the world of MR-X!</p>
    </div>
</div>
<style>
    .navbar-brand {
        display: flex;
        align-items: center;
        font-family: 'Arial', sans-serif;
        text-decoration: none;
    }

    .navbar-logo {
        width: 30px; /* Adjust logo size */
        height: auto;
        margin-right: 7px; /* Space between logo and text */
    }

    .dynamic-text {
        display: inline-block;
        font-size: 30px;
        font-weight: bolder;
        color: #007bff;
        text-transform: uppercase;
        animation: colorChange 5s infinite;
    }

    @keyframes colorChange {
        0% {
            color: #007bff;
        }
        25% {
            color: #ff6347; /* Tomato */
        }
        50% {
            color: #32cd32; /* LimeGreen */
        }
        75% {
            color: #ff1493; /* DeepPink */
        }
        100% {
            color: #007bff;
        }
    }

    
</style>
<style>
    .nav-contact {
        font-size: 10px;
        font-weight: bold;
        color: #fff;
        background-color:rgb(220, 240, 39); /* Blue background */
        border-radius: 5px;
        padding: 3px 1px;
        text-transform: uppercase;
        transition: all 0.3s ease;
        box-shadow: 0 2px 1px rgba(0,111 , 255, 0.5); /* Subtle shadow for extra emphasis */
    }

    /* Hover effect */
    .nav-contact:hover {
        background-color: #0056b3; /* Darker blue on hover */
        color:#fff;
        transform: scale(1.05); /* Slightly increase size on hover */
    }

    /* Pulsing animation to attract attention */
    .nav-contact {
        animation: pulse 2s infinite;
    }
    .nav-contact {
    color: #fff; /* Always white text */
}

@keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.5);
        }
        50% {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.7);
        }
        100% {
            transform: scale(1);
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.5);
        }
    } 

   
</style>
<style>
    /* Full-screen container */
    .scroll-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh; /* Makes it take full screen height */
        width: 100%;
        position: relative;
    }

    .scroll-messages {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        background-color: #007bff; /* Blue background */
        color: #fff; /* White text */
        font-size: 16px; /* Bigger font for visibility */
        font-weight: bold;
        padding: 18px;
        
        justify-content: center;
        align-items: center;
        top: 30%; /* Center it vertically */
        height: 40px;
        transform: translateY(-20%); /* Adjust for perfect centering */
    }

    .scroll-messages p {
        display: flex;
        padding-left: 50%;
        animation: scrollText 16s linear infinite; /* Smooth scrolling */
    }

    @keyframes scrollText {
        from {
            transform: translateX(100vw); /* Start off-screen */
        }
        to {
            transform: translateX(-100vw); /* Scroll fully across */
        }
    }
</style>