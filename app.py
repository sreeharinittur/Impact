from flask import Flask, render_template, request
from models import score_candidates

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/evaluate', methods=['POST'])
def evaluate():
    # Get responses for each candidate and question
    candidate1_responses = [
        request.form['candidate1_q1'],
        request.form['candidate1_q2'],
        request.form['candidate1_q3']
    ]
    
    candidate2_responses = [
        request.form['candidate2_q1'],
        request.form['candidate2_q2'],
        request.form['candidate2_q3']
    ]
    
    candidate3_responses = [
        request.form['candidate3_q1'],
        request.form['candidate3_q2'],
        request.form['candidate3_q3']
    ]
    
    # All responses for all candidates
    all_responses = [candidate1_responses, candidate2_responses, candidate3_responses]
    
    # Evaluate candidates based on their responses
    scores = score_candidates(all_responses)

    # Combine results for display
    results = zip(["Candidate 1", "Candidate 2", "Candidate 3"], all_responses, scores)
    
    return render_template('results.html', results=results)

if __name__ == '__main__':
    app.run(debug=True)
