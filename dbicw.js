function validate()
{
    var empt = document.st.title.value;
    if (empt == "")
    {
        alert("You have submitted an empty form");
        return false;
    }
    else if (empt >= 1)
    {  
        alert("You have submitted an int");
        return false;
    }
    else 
    {
        return true; 
    }
}

function check()
{
    var empt = document.sa.actor.value;
    if (empt == "")
    {
        alert("You have submitted an empty form");
        return false;
    }
    else if (empt >= 1)
    {  
        alert("You have submitted an int");
        return false;
    }
    else 
    {
        return true; 
    }
}

function validateDelete()
{
    var empt = document.da.name.value;
    if (empt == "")
    {
        alert("You have submitted an empty form");
        return false;
    }
    else if (empt >= 1)
    {  
        alert("You have submitted an int");
        return false;
    }
    else 
    {
        return true; 
    }
}

function validateDelete2()
{
    var empt = document.dm.title.value;
    if (empt == "")
    {
        alert("You have submitted an empty form");
        return false;
    }
    else if (empt >= 1)
    {  
        alert("You have submitted an int");
        return false;
    }
    else 
    {
        return true; 
    }
}
