#!/usr/bin/env python
# coding: utf-8

# In[1]:

import mysql.connector
import ahpy
import sys

try:
    # Connect to the MySQL database
    connection = mysql.connector.connect(
        host='localhost',
        user='root',
        password='',
        database='electric_car'
    )
    cursor = connection.cursor()

    # Fetch criteria and alternatives from the database
    cursor.execute("SELECT DISTINCT criterion1 FROM criteria_comparisons UNION SELECT DISTINCT criterion2 FROM criteria_comparisons")
    criteria_rows = cursor.fetchall()

    criterias = [row[0] for row in criteria_rows]

    cursor.execute("SELECT DISTINCT alternative1 FROM alternative_comparisons UNION SELECT DISTINCT alternative2 FROM alternative_comparisons")
    alternative_rows = cursor.fetchall()

    alternatives = [row[0] for row in alternative_rows]

    # Fetch criteria comparisons from the database
    cursor.execute("SELECT criterion1, criterion2, crit_value FROM criteria_comparisons")
    criteria_comparisons = {(row[0], row[1]): row[2] for row in cursor.fetchall()}

    # Fetch alternative comparisons from the database
    cursor.execute("SELECT criterion, alternative1, alternative2, alt_value FROM alternative_comparisons")
    alternative_comparisons = {}
    for row in cursor.fetchall():
        criterion, alternative1, alternative2, value = row
        if criterion not in alternative_comparisons:
            alternative_comparisons[criterion] = {}
        alternative_comparisons[criterion][(alternative1, alternative2)] = value

    # Close the database connection
    connection.close()

    # Create the AHP model for criteria
    criteria_ahp = ahpy.Compare('Criteria', criteria_comparisons, precision=3)

    # Create the AHP models for alternatives with respect to each criterion
    alternative_ahp = {}
    for criterion in criterias:
        alternative_ahp[criterion] = ahpy.Compare(criterion, alternative_comparisons[criterion], precision=3)

    # Combine the criteria and alternative priorities to calculate the overall scores
    overall_scores = {}
    for alt in alternatives:
        overall_scores[alt] = sum(criteria_ahp.target_weights[crit] * alternative_ahp[crit].target_weights[alt] for crit in criterias)

    # Insert results into the database
    connection = mysql.connector.connect(
        host='localhost',
        user='root',
        password='',
        database='electric_car'
    )
    cursor = connection.cursor()

    cursor.execute("DELETE FROM ahp_results")
    for idx, (alternative, score) in enumerate(sorted(overall_scores.items(), key=lambda item: item[1], reverse=True), start=1):
        cursor.execute("INSERT INTO ahp_results (id, alternative, score) VALUES (%s, %s, %s)", (idx, alternative, float(score)))

    cursor.execute("DELETE FROM criteria_comparisons")
    cursor.execute("DELETE FROM alternative_comparisons")
    
    # Commit the transaction
    connection.commit()
    connection.close()

    # Print overall scores for debugging
    print("Overall Scores:", overall_scores)

except Exception as e:
    print(f"An error occurred: {e}")
    sys.exit(1)

sys.exit(0)


