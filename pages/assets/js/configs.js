/*
   ++++++++++++++++++++++++++++++++++++++++++++++++++
    ||                   Config                   ||
   ++++++++++++++++++++++++++++++++++++++++++++++++++
*/

const questions = {
    question1: {
        id: 'question1',
        title: 'You are an extraordinary ability individual in:',
        options: [
            { text: 'Science', point: 0, step: 1 },
            { text: 'Art', point: 0, step: 1 }, 
            { text: 'Sport', point: 0, step: 1 },
            { text: 'Dance', point: 0, step: 1 },
            { text: 'Engineering', point: 0, step: 1 },
            { text: 'Business', point: 0, step: 1 },
            { text: 'None of the above', point: 0, step: 1 },
        ],
    },
    question2: {
        id: 'question2',
        title: 'Have you received prizes or awards related to your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question3: {
        id: 'question3',
        title: 'Are you a member of an association, group, team or a similar community related to your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 2 },
        ],
    },
    question4: {
        id: 'question4',
        title: 'Does this association, group, team or community require outstanding achievement of its members, as judged by recognized experts?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question5: {
        id: 'question5',
        title: 'Are there any printed references to your work in major trade publications, professional publications or major media?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 2 },
        ],
    },
    question6: {
        id: 'question6',
        title: 'Are there any citations to your work in major trade publications, professional publications or major media?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question7: {
        id: 'question7',
        title: 'Have you ever judged the work of others in your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 2 },
        ],
    },
    question8: {
        id: 'question8',
        title: 'Have you participated in a review panel, editorial board, or have you reviewed the work of others in your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question9: {
        id: 'question9',
        title: 'Do you think you have made a contribution of major significance to your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question10: {
        id: 'question10',
        title: 'Have you authored any published works related to your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question11: {
        id: 'question11',
        title: 'Has your work been exhibited or showcased?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question12: {
        id: 'question12',
        title: 'Have you acted in a leading or critical role in organization of distinguished reputation related to your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question13: {
        id: 'question13',
        title: 'Have you received high remuneration (compensation, wages, income) for your activities compared to others in your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
    question14: {
        id: 'question14',
        title: 'Have you achieved commercial success in your field of endeavor?',
        options: [
            { text: '---', point: 0, step: 0 },
            { text: 'Yes', point: 1, step: 1 },
            { text: 'No', point: 0, step: 1 },
        ],
    },
};

/*
   ++++++++++++++++++++++++++++++++++++++++++++++++++
    ||                   Result                   ||
   ++++++++++++++++++++++++++++++++++++++++++++++++++
*/

let prof = 'Professions';

function get_prof() {
    
switch (localStorage.getItem("question1")) {
    case '0':
        prof = 'Science';
        break;

    case '1':
        prof = 'Art';
        break;

    case '2':
        prof = 'Sport';
        break;
        
    case '3':
        prof = 'Dance';
        break;

    case '4':
        prof = 'Engineering';
        break;

    case '5':
        prof = 'Business';
        break;

    case '6':
        prof = 'None of the above';
        break;
        
    default:

        prof = 'Professions';
        break;
    }
}
get_prof();


var passingPoints = 3;
var testPassedText = `
    <h2>Congratulations!</h2>

    <p>You may qualify to file an I-140 immigrant visa petition as an alien of extraordinary ability in ${prof}.</p>
    <p>In order to have our immigration attorney, Tatiana S. Aristova, Esq., to review your case to further determine if you should indeed file I-140 immigrant visa petition as an alien of an extraordinary ability and whether we will be able to represent you in this filing, please click here.</p>
`;
var testFailedText = `
    <p>It looks like you probably may not qualify to file an I-140 immigrant visa petition as an alien of extraordinary ability in Art, but we can suggest other visa categories that correspond to your situation.</p>
    <p>In order to have our immigration attorney, Tatiana S. Aristova, Esq., to review your situation and determine if you should indeed file I-140 immigrant visa petition as an alien of an extraordinary ability and whether we will be able to represent you in this filing, please click here.</p>
`;