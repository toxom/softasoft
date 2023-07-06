<link rel="stylesheet" href="styles.css">


<div class="form-container">
  <form id="myForm">
    <div class="form-step">
      <label for="task">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    
    <div class="form-step">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-step">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    
    <div class="form-step">
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>
    </div>
    
    <div class="form-navigation">
      <button type="button" id="prevButton" onclick="goToPrevStep()">Previous</button>
      <button type="button" id="nextButton" onclick="goToNextStep()">Next</button>
    </div>
  </form>
</div>
