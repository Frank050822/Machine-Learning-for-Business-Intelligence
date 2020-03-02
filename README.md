# Machine-Learning-for-Business-Intelligence
# This is for NYU Tandon Course Independent Study Final Project: Machine Learning for Business Intelligence 

## Bicycle Customers & Sales Analysis
### Brief Description:
Boulder Expeditions is an online Biking company focused on Mountain and Touring bikes. There are two main objectives of our project: customer segmentation and predicting customer behavior. The dataset includes following features of each customer: BirthDate, MaritalStatus, Gender, AnnualIncome, TotalChildren, EducationLevel, Occupation, HomeOwner, lat, lng, OrderDate, StockDate, OrderQuantity, ProductName, ModelName, ProductCost, ProductPrice

### Objective / Solved Problem
1. Target marketing based on customer segmentation¶
We use K-Means to divide our customers into 4 different groups, and then marketing department employees can utilize this information to target the 
customers. 
2. Predict customer behavior for potential purchase
Regression: Based on customer personal information, we can predict how much money such customers would like to spend in the future. 
3. Create a product recommendation system
Classification: Based on customer personal information, we can predict which bicycles s/he may be interested in buying, so we can target our customers
with different marketing strategy.

### Project Structure
Data Cleaning
    ---Winsorization

1) Unsupervised Model: K-Means

2）Supervised Model: Regression 
    2.1 Data Preprocessing - One Hot Encoder
    2.2 Data Preprocessing - Standarization
    2.3 Linear Regression - OLS

3) Supervised Model: Classification
    3.1 Classification Models
        3.1.1 Logistic Regression 
        3.1.2 K Nearest Neighbors
        3.1.3 Classification Tree
        3.1.4 Random Forest
        3.1.5 Naive Bayes 
        3.1.6 Support Vector Machine 
        3.1.7 Neural Network w/ Indentity Activation Function 
        3.1.8 Table of Prediction Score
    3.2 Model Improvement - Cross Validation

Summary          
