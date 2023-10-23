console.log('Sobantu Javascript is ready');
console.log('CPUT HOTEL RESTUARANT')

import express from 'express';
const app = express();
import { urlencoded, json } from 'body-parser';
const PORT = 3000;

app.use(urlencoded({ extended: false }));
app.use(json());

const reservations = [];

app.post('/reserve', (req, res) => {
  const { date, Time, People, Location } = req.body;
  const reservation = {date, Time, People, Location };
  reservations.push(reservation);
  res.status(201).json({ message: 'Reservation made successfully' });
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});

