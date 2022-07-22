import React, { useState, useEffect } from "react";
import Pagination from "@mui/material/Pagination";

import axios from "axios";
import { styled } from "@mui/material/styles";
import Box from "@mui/material/Box";
import Rating from "@mui/material/Rating";
import FavoriteIcon from "@mui/icons-material/Favorite";
import FavoriteBorderIcon from "@mui/icons-material/FavoriteBorder";
import Typography from "@mui/material/Typography";
const StyledRating = styled(Rating)({
    "& .MuiRating-iconFilled": {
        color: "#ff6d75"
    },
    "& .MuiRating-iconHover": {
        color: "#ff3d47"
    }
});
export default function BasicPagination() {
    const [data, setData] = useState([]);
    const [page, setPage] = useState(1);
    const [postPerPage] = useState(9);
    const [value, setValue] = React.useState(2);

    useEffect(() => {
        axios
            .get("https://jsonplaceholder.typicode.com/posts")
            .then((res) => setData(res.data));
    }, []);

    return (
        <div>
            {data.slice((page - 1) * postPerPage, page * postPerPage).map((item) => (
                <>
                    {item.title}
                    <hr />
                    <Box
                        sx={{
                            "& > legend": { mt: 2 }
                        }}
                    >
                        <StyledRating
                            name="customized-color"
                            defaultValue={2}
                            getLabelText={(value) =>
                                `${value} Heart${value !== 1 ? "s" : ""}`
                            }
                            precision={0.5}
                            icon={<FavoriteIcon fontSize="inherit" />}
                            emptyIcon={<FavoriteBorderIcon fontSize="inherit" />}
                        />
                        <Rating
                            name="simple-controlled"
                            value={value}
                            onChange={(event, newValue) => {
                                setValue(newValue);
                            }}
                        />
                    </Box>
                </>
            ))}

            <Pagination
                page={page}
                onChange={(e, value) => setPage(value)}
                count={Math.ceil(data.length / postPerPage)}
                color="secondary"
                shape="rounded"
                showFirstButton
                showLastButton
                size="small"
                defaultPage={1}
            />
        </div>
    );
}
