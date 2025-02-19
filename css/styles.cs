body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: black;
    height: 100vh;
    color: white;
    padding: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

.content {
    flex-grow: 1;
    padding: 20px;
}

.task {
    margin-bottom: 20px;
}

.task button {
    margin-right: 10px;
}