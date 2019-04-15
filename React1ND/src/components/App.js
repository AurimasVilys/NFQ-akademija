import React from 'react';
import Card from './Card';
//import Filter from './Filter';
import axios from 'axios';
import { endpoints, getImageUrl } from '../../config';
import Filter from "./Filter";

class App extends React.Component {
  constructor() {
    super();
    
    this.state = {
      movieList: [],
      genreFilter: [],
      likedMovies: []
    };
    
    this.getMovies();
    this.getGenres();
  }
  
  getMovies = () => {
    axios
      .get(endpoints.mostPopularMovies())
      .then((res) => this.setMovieList(res.data.results))
      .catch((error) => console.log(error));
  };

  getGenres = () => {
    axios
        .get(endpoints.genres())
        .then((res) => this.setGenreList(res.data.genres))
        .catch((error) => console.log(error));
  };

  getGenreMovies = (genreID) => {
    axios
        .get(endpoints.genreMovies(genreID))
        .then((res) => this.setMovieList(res.data.results))
        .catch((error) => console.log(error));
    this.render();
  }
  
  setMovieList = (list) => {
    this.setState({
      movieList: list,
    });
  };

  setGenreList = (filters) => {
    this.setState({
      genreFilter: filters
    })
  }

  likeMovie = (movie) => {

    if(this.checkIfMovieLiked(movie)) {
      const likedMovies_copy = this.state.likedMovies.slice();
      const index = likedMovies_copy.indexOf(movie);
      likedMovies_copy.splice(index, 1);
      this.setState({
        likedMovies: likedMovies_copy
      });

    }
    else {
      this.setState({
        likedMovies: [...this.state.likedMovies, movie]
      })
    }
  }

  checkIfMovieLiked = (movie) => {
    return this.state.likedMovies.some(item => movie.id === item.id);
  }

  
  render() {
    const { movieList, genreFilter } = this.state;

    return (
      <div>
          <div className="genres">
          {genreFilter.map((filter) => (
                <Filter
                    key = {filter.id}
                    id = {filter.id}
                    name = {filter.name}
                    click = { this.getGenreMovies.bind(this, filter.id) }
                />
          ))}
          </div>
        <div>
          {movieList.map((listItem) => (
              <Card
                  key = { listItem.id }
                  backgroundImage={getImageUrl(listItem.backdrop_path)}
                  title={listItem.original_title}
                  releaseDate={listItem.release_date}
                  score={listItem.vote_average}
                  votes={listItem.vote_count}
                  description={listItem.overview}
                  likeMovie = {this.likeMovie.bind(this, listItem)}
                  like = {this.checkIfMovieLiked(listItem)}
              />
          ))}
        </div>
      </div>
    );
  }
}

export default App;
