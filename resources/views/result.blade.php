<br><br><br><br><br><br>

<P>Insurance Plan Recommendation For You<P>


    <br><br><br>
    <b>*Result*</b>
    <br><br><br>

    <form method="POST" action="{{ route('quote.store') }}">
      {{csrf_field()}}

      <label for="fname">Plan Name:</label>
      <input type="text" id="fname" name="PlanId" value='{{$plan["PlanName"]}}' READONLY><br><br>
      <label for="lname">Plan ID:</label>
      <input type="text" id="lname" name="PlanName" value='{{$plan["PlanId"]}}' READONLY><br><br>
      <label for="fname">Plan No:</label>
      <input type="text" id="fname" name="PlanNo" value='{{$plan["PlanNo"]}}' READONLY><br><br>
      <label for="lname">Contribution Term:</label>
      <input type="text" id="lname" name="ContTerm" value='{{$plan["ContTerm"]}}' READONLY><br><br>
      <label for="fname">Benefit Death:</label>
      <input type="text" id="fname" name="BenefitDeath" value='{{$plan["BenefitDeath"]}}' READONLY><br><br>
      <label for="fname">Critical Illness:</label>
      <input type="text" id="fname" name="CriticalIllness" value='{{$plan["CriticalIllness"]}}' READONLY><br><br>
      <label for="fname">Accidential Death:</label>
      <input type="text" id="lname" name="AccidentialDeath" value='{{$plan["AccidentialDeath"]}}' READONLY><br><br>
      <label for="fname">Hospital Benefit:</label>
      <input type="text" id="fname" name="HospitalBenefit" value='{{$plan["HospitalBenefit"]}}' READONLY><br><br>
      <label for="lname">Total Monthly Contribution:</label>
      <input type="text" id="lname" name="TotalMonthlyContribution" value='{{$plan["TotalMonthlyContribution"]}}' READONLY><br><br>
      <label for="fname">Total Anually Regular Contribution:</label>
      <input type="text" id="fname" name="TotalAnuallyRegularContribution" value='{{$plan["TotalAnuallyRegularContribution"]}}' READONLY><br><br>
      <label for="fname">Plan Name:</label>
      <input type="text" id="fname" name="user_id" value='{{$plan["PlanName"]}}' READONLY><br><br>

      <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
          <a href="{{ url('/quote') }}"><button type="button" name="Details">
              {{ __("Change Quote") }}

            </button>
          </a>

        </div>
      </div>
      <input type="submit" value="Submit">
    </form>