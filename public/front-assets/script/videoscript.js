// Import the allWebSeries object from video-list.js
import { allWebSeries } from './video-list.js';

const mainVideo = document.querySelector('#main-Video');
const playlist = document.getElementById('playlist');
const Episode = document.querySelector('.Episode');
const videoTitle = document.querySelector('.title');

// Read the web series index from the URL parameter
const urlParams = new URLSearchParams(window.location.search);
let currentWebSeriesIndex = parseInt(urlParams.get('webseries')) || 0;

// Initialize music index and total episodes for the current web series
let musicIndex = 1;
let totalEpisodes = 0;

window.addEventListener('load', () => {
   initializePlaylist(currentWebSeriesIndex);
   playingNow();
});

function playMusic() {
   mainVideo.play();
   playlist.classList.add('active');
}

function loadMusic(indexNumb) {
   const currentEpisode = getCurrentEpisodes()[indexNumb - 1];
   mainVideo.src = `${currentEpisode.src}.mkv`;
   videoTitle.innerHTML = `${indexNumb}. ${currentEpisode.name}`;
}

function initializePlaylist(webSeriesIndex) {
   currentWebSeriesIndex = webSeriesIndex;
   const currentEpisodes = getCurrentEpisodes();

   // Set total episodes for the current web series
   totalEpisodes = currentEpisodes.length;
   Episode.innerHTML = `${totalEpisodes} Episodes`;

   playlist.innerHTML = "";

   currentEpisodes.forEach((episode, index) => {
      let liTag = `<li li-index="${index + 1}">
         <div class="row">
            <span>${index + 1}. ${episode.name}</span>
         </div>
         <video class="${episode.id}" src="${episode.src}.mkv" style="display: none;" title="${episode.name}"></video>
         <span id="${episode.id}" class="duration"></span>
      </li>`;
      playlist.insertAdjacentHTML('beforeend', liTag);
   });

   loadMusic(1);
   playlist.addEventListener('click', handlePlaylistClick);
}

function playingNow() {
   const allLiTags = playlist.querySelectorAll('li');
   for (let j = 0; j < totalEpisodes; j++) {
      if (allLiTags[j] && allLiTags[j].classList.contains('playing')) {
         allLiTags[j].classList.remove("playing");
      }
      if (allLiTags[j] && allLiTags[j].getAttribute('li-index') == musicIndex) {
         allLiTags[j].classList.add('playing');
      }
   }
}

function getCurrentEpisodes() {
   return allWebSeries[currentWebSeriesIndex].episodes;
}

function handlePlaylistClick(event) {
   const liElement = event.target.closest('li');
   if (liElement) {
      const getIndex = liElement.getAttribute("li-index");
      musicIndex = getIndex;
      loadMusic(musicIndex);
      playMusic();
      playingNow();
   }
}
