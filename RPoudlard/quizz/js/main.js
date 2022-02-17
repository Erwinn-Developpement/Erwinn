// DOM => Document Object Model

const els = {
    welcomeScreen: null,
    questionScreen: null,
    endScreen: null,
    welcomeBtn: null,
    answers: null,
    endBtn: null,
    answersContainer: null
};

let questionIndex = 0;

const questions = [{
        question: 'Quelle est ta couleur préféré ?',
        answers: [{
            title: 'Rouge',
            house: 'gryffondor'
        }, {
            title: 'Vert',
            house: 'slytherin'
        }, {
            title: 'Bleu',
            house: 'ravenclaw'
        }, {
            title: 'Jaune',
            house: 'hufflepuff'
        }]
    },
    {
        question: 'Quel professeur préféres tu parmis ceux-ci ?',
        answers: [{
            title: 'FlitWick',
            house: 'ravenclaw'
        }, {
            title: 'Roque',
            house: 'slytherin'
        }, {
            title: 'McGonagall',
            house: 'gryffondor'
        }, {
            title: 'Chourave',
            house: 'hufflepuff'
        }]
    },
    {
        question: 'Quel est ton animal magique favori ?',
        answers: [{
            title: 'Blaireau',
            house: 'hufflepuff'
        }, {
            title: 'Lion',
            house: 'gryffondor'
        }, {
            title: 'Aigle',
            house: 'ravenclaw'
        }, {
            title: 'Serpend',
            house: 'slytherin'
        }]
    },
    {
        question: 'Quels sont tes qualités ?',
        answers: [{
            title: 'la ruse, l’ambition et l’ingéniosité',
            house: 'slytherin'
        }, {
            title: "le courage, la force d'esprit, la paix et la hardiesse",
            house: 'gryffondor'
        }, {
            title: 'la sagesse, l’esprit, l’intellect et l’apprentissage',
            house: 'ravenclaw'
        }, {
            title: 'le sens du partage, la bienveillance et la loyauté',
            house: 'hufflepuff'
        }]
    },
    {
        question: 'Quel est ton fantôme préférés ?',
        answers: [{
            title: 'Le Moine Gras',
            house: 'hufflepuff'
        }, {
            title: 'Nick Quasi-Sans-tête',
            house: 'gryffondor'
        }, {
            title: 'La Dame Grise',
            house: 'ravenclaw'
        }, {
            title: 'Baron Sanglant',
            house: 'slytherin'
        }]
    },
    {
        question: 'Quel personnage préféres-tu ?',
        answers: [{
            title: 'Cédric Diggory',
            house: 'hufflepuff'
        }, {
            title: 'Hermione Granger',
            house: 'gryffondor'
        }, {
            title: 'Louna Lovegood',
            house: 'ravenclaw'
        }, {
            title: 'Drago Malefoy',
            house: 'slytherin'
        }]
    },
    {
        question: 'Quel objet magique te plaît le plus ?',
        answers: [{
            title: 'Carte du Maraudeur',
            house: 'hufflepuff'
        }, {
            title: 'Pierre Philosophale',
            house: 'gryffondor'
        }, {
            title: 'Le retourneur de temps',
            house: 'ravenclaw'
        }, {
            title: 'Rappeltout',
            house: 'slytherin'
        }]
    },
];

const recordedAnswers = [];


const init = () => {
    console.log('Page has loaded');

    els.welcomeScreen = document.querySelector('.welcome-screen');
    els.questionScreen = document.querySelector('.question-screen');
    els.endScreen = document.querySelector('.end-screen');
    els.welcomeBtn = els.welcomeScreen.querySelector('button');
    els.endBtn = els.endScreen.querySelector('button');
    els.answersContainer = els.questionScreen.querySelector('ul');

    els.welcomeBtn.addEventListener('click', () => {
        displayScreen('question');
        displayQuestion(questionIndex);
    });
    els.endBtn.addEventListener('click', () => {
        displayScreen('welcome');
        questionIndex = 0;
    });

    els.answersContainer.addEventListener('click', ({ target }) => {
        if (target.tagName !== 'LI') {
            return;
        }
        const house = target.getAttribute('data-house');
        recordedAnswers.push(house);

        questionIndex++;

        if (questionIndex >= questions.length) {
            calculateScore();
            displayScreen('end');
        } else {
            displayQuestion(questionIndex);
        }
    });

};

const calculateScore = () => {
    const house = recordedAnswers.sort((a, b) => {
        return recordedAnswers.filter(answer => answer === a).length - 
        recordedAnswers.filter(answer => answer === b).length 
    }).pop();
    // console.log('house', house);

    const houseInFrench = {
        slytherin: 'Serpentard',
        hufflepuff: 'PouffSouffle',
        ravenclaw: 'Serdaigle',
        gryffondor: 'Griffondor'
    };

    els.endScreen.querySelector('span').textContent = houseInFrench[house];
};

const displayQuestion = (index) => {

    const currentQuestion = questions[index];

    const questionEl = els.questionScreen.querySelector('h2');

    const answerEls = currentQuestion.answers.map((answer) => {
        const liEl = document.createElement('li');
        liEl.textContent = answer.title;
        liEl.setAttribute('data-house', answer.house);
        return liEl;
    });

    questionEl.textContent = currentQuestion.question;
    els.answersContainer.textContent = '';
    els.answersContainer.append(...answerEls);
};

const displayScreen = (screenName) => {
    // console.log('screenName', screenName);
    els.welcomeScreen.style.display = 'none';
    els.questionScreen.style.display = 'none';
    els.endScreen.style.display = 'none';

    const screen = els[screenName + 'Screen'];
    // console.log('screen', screen);
    screen.style.display = 'flex';
};


window.addEventListener('load', init);