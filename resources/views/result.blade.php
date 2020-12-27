<br><br><br><br><br><br>

<P>Insurance Plan Recommendation For You<P>


<br><br><br>
<b>*Result*</b>
<br><br><br>

<form method="POST" action="/quote">
  <label for="fname">Plan Name:</label>
  <input type="text" id="fname" name="fname" value='{{$plan["PlanName"]}}' disabled><br><br>
  <label for="lname">Plan ID:</label>
  <input type="text" id="lname" name="lname" value='{{$plan["PlanId"]}}' disabled><br><br>
  <label for="fname">Plan No:</label>
  <input type="text" id="fname" name="fname" value='{{$plan["PlanNo"]}}' disabled><br><br>
  <label for="lname">Contribution Term:</label>
  <input type="text" id="lname" name="lname" value='{{$plan["ContTerm"]}}' disabled><br><br>
  <label for="fname">Benefit Death:</label>
  <input type="text" id="fname" name="fname" value='{{$plan["BenefitDeath"]}}' disabled><br><br>
  <label for="fname">Critical Illness:</label>
  <input type="text" id="fname" name="fname" value='{{$plan["CriticalIllness"]}}' disabled><br><br>
  <label for="fname">Accidential Death:</label>
  <input type="text" id="lname" name="lname" value='{{$plan["AccidentialDeath"]}}' disabled><br><br>
  <label for="fname">Hospital Benefit:</label>
  <input type="text" id="fname" name="fname" value='{{$plan["HospitalBenefit"]}}' disabled><br><br>
  <label for="lname">Total Monthly Contribution:</label>
  <input type="text" id="lname" name="lname" value='{{$plan["TotalMonthlyContribution"]}}' disabled><br><br>
  <label for="fname">Total Anually Regular Contribution:</label>
  <input type="text" id="fname" name="fname" value='{{$plan["TotalAnuallyRegularContribution"]}}' disabled><br><br>
  <label for="fname">Plan Name:</label>
  <input type="text" id="fname" name="fname" value='{{$plan["PlanName"]}}' disabled><br><br>

  <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <a href="{{ url('/quote') }}"><button type="button" name="Details" >
                                {{ __("Change Quote") }}  
        
                                </button>
                                </a>

                            </div>
                        </div>
  <input type="submit" value="Submit">
</form>

