import React, {useState, useEffect} from "react";
import ReactDOM from "react-dom";
import Pagination from "@mui/material/Pagination";
// import Pagination from '@material-ui/lab/Pagination';

import Box from "@mui/material/Box";
import Grid from "@mui/material/Grid";
import Card from "@mui/material/Card";
import CardActions from "@mui/material/CardActions";
import CardContent from "@mui/material/CardContent";
import CardMedia from "@mui/material/CardMedia";
import Button from '@mui/material/Button';
import Typography from "@mui/material/Typography";
import Rating from '@mui/material/Rating';
import ShoppingCartIcon from '@material-ui/icons/ShoppingCart';
import StarIcon from '@material-ui/icons/Star';

function ProductList() {
    const [products, setProducts] = useState([]);
    const [page, setPage] = useState(1);
    const [postPerPage] = useState(3);
    // const [item, setItem] = React.useState(2);

    useEffect(() => {
        fetchProducts();
    }, []);

    const fetchProducts = async () => {
        await axios.get(`/product/list`).then(({data}) => {
            setProducts(data);
        });
    };
    return (
        <Box sx={{flexGrow: 1}}>
            <Grid container spacing={3}>
                {products.slice((page - 1) * postPerPage, page * postPerPage).map((row) => (
                    <Grid item xs={4} key={row.id}>
                        <Card sx={{maxWidth: 360}}>
                            <CardMedia
                                component="img"
                                height="300"
                                image={row.loc}
                                alt="green iguana"
                            />
                            <CardContent>
                                <Box>
                                    <Grid item xs={8}>
                                        <Typography
                                            gutterBottom
                                            variant="h5"
                                            component="div"
                                        >
                                            {row.name}
                                        </Typography>
                                    </Grid>
                                    <Grid item xs={4}>
                                        {row.price}$
                                    </Grid>
                                </Box>
                                <Typography variant="body2" color="text.secondary">
                                    Lizards are a widespread group of squamate
                                    reptiles, with over 6,000 species, ranging
                                    across all continents except Antarctica
                                </Typography>
                                <Typography>
                                    <Rating
                                        name="text-feedback"
                                        value={row.rating}
                                        readOnly
                                        precision={0.5}
                                        emptyIcon={<StarIcon style={{ opacity: 0.55 }} fontSize="inherit" />}
                                    />{row.rating}
                                </Typography>
                            </CardContent>
                            <CardActions>
                                <Button size="small" variant="outlined" color='success'><ShoppingCartIcon /></Button>
                                <Button size="small" variant="outlined" color="secondary">Learn More</Button>
                            </CardActions>
                        </Card>
                    </Grid>
                ))}
            </Grid>
            <Pagination
                page={page}
                onChange={(e,page) => setPage(page+1)}
                count={Math.ceil(products.length / postPerPage)}
                color="secondary"
                shape="rounded"
                showFirstButton
                showLastButton
                size="small"
                // defaultPage={1}
            />
        </Box>
    );
}

export default ProductList;

// DOM element
if (document.getElementById('productlist')) {
    ReactDOM.render(<ProductList/>, document.getElementById('productlist'));
}
