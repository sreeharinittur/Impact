import spacy
from sklearn.linear_model import LogisticRegression
import nltk
from nltk.sentiment import SentimentIntensityAnalyzer

# Load spaCy model for NLP
nlp = spacy.load('en_core_web_sm')
nltk.download('vader_lexicon')

# Sentiment analyzer
sia = SentimentIntensityAnalyzer()


keywords_technical = ['neural network', 'backpropagation', 'gradient descent', 'SVM', 'regularization']
keywords_problem_solving = ['problem-solving', 'algorithm', 'approach', 'strategy']
keywords_communication = ['clarity', 'explain', 'presentation']

# Feature extraction
def get_features(text):
    doc = nlp(text)
    sentiment = sia.polarity_scores(text)['compound']
    
    # Extract technical, problem-solving, and communication score
    technical_score = sum(1 for token in doc if token.text.lower() in keywords_technical)
    problem_solving_score = sum(1 for token in doc if token.text.lower() in keywords_problem_solving)
    communication_score = sum(1 for token in doc if token.text.lower() in keywords_communication)
    
    return technical_score, problem_solving_score, communication_score, sentiment

# Scoring function for all candidates
def score_candidates(all_responses):
    scores = []
    
    for responses in all_responses:
        total_score = 0
        for response in responses:
            technical, problem_solving, communication, sentiment = get_features(response)
            
            # Weighting the scores (this can be adjusted)
            total_score += (technical * 2) + (problem_solving * 1.5) + (communication * 1.2) + (sentiment * 1)
        
        scores.append(total_score)
    
    return scores
