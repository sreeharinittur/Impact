# AI-Based Candidate Screening System

## Overview
This project is an AI-based system that helps screen and rank candidates applying for AI-related roles based on their interview responses. The system evaluates responses by analyzing technical skills, problem-solving abilities, communication skills, and sentiment. The goal is to automate the screening process to help recruiters prioritize candidates more effectively.

## Features
- **NLP with spaCy**: The system tokenizes text and matches predefined keywords for technical skills, problem-solving, and communication.
- **Sentiment Analysis**: Uses NLTK's VADER sentiment analysis to assess the overall sentiment of each response.
- **Keyword-Based Scoring**: Scores candidates based on the frequency of relevant technical, problem-solving, and communication keywords.
- **Weighted Scoring**: Each aspect is weighted differently to reflect its importance in the evaluation process.

## Tools and Technologies Used
- **Python**: The programming language for implementing logic.
- **spaCy**: NLP library used for tokenization and text processing.
- **NLTK (VADER)**: Sentiment analysis toolkit used to assess the sentiment of candidate responses.
- **scikit-learn (sklearn)**: Although not directly implemented, it shows the possibility of using machine learning for future improvements.

## Installation

### Clone the Repository
```bash
git clone <repository-url>
cd <project-directory>

### Install Dependencies

Install the necessary Python dependencies for the project by running the following command:

```bash
pip install -r requirements.txt

###Download SpaCy and NLTK Resources
###Install the SpaCy English language model
python -m spacy download en_core_web_sm

###Download the VADER lexicon from NLTK:
import nltk
nltk.download('vader_lexicon')

###Run the project
python main.py

