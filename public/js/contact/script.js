const topics = document.querySelectorAll('.topic');
topics.forEach((topic, index) => {
    topic.addEventListener('click', () => {
        clearChoosedTopic();
        topic.classList.add('tp-choosed');
    })
})

function clearChoosedTopic(){
    topics.forEach((topic) => {
        topic.classList.remove('tp-choosed');
    })
}