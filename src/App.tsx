import React,{ useState, useEffect } from 'react';
import axios from 'axios';

import { Button, TextField, Box } from '@mui/material';

export default function App(){
    const url = 'htttp://localhost:8000/api/amount2';

    const [interest, setInterest] = useState(null);
    const [response, setResponse] = useState(null);
    const [value, setValue] = useState(0);

    useEffect( ()=> {
        console.log(response)
    }, [response]);

    function chamarApi(e){
        axios
            .get(url)
            .then( res =>{
                setResponse(res)
            })
            .catch( err => {
                console.log(err)
            })
    }

    const handleClick = (string: event) => {
        setInterest(event.target.value);
    }

    return(
        <>
        <Box component="section" sx={{display: 'flex', justifyContent: 'space-around'}}>
            <TextField label="R$" onChange={handleClick} value={interest} variant="outlined"/>
            <Button onClick={() => chamarApi(interest)} size="large" variant="contained" color="warning">Gasto</Button>
            <Button size="large" variant="contained">Ganho</Button> 
        </Box>

        <p> {value} </p>
        </>
    )
}