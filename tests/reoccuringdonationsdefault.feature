Feature: This extension makes a contribution page (selected by Id) default to recurring donations.


Scenario: Visiting a Donation Page
  Given The user is at donation page with <ID>
  Then On page load the reoccuring donations box should be <checked>

| ID | checked   |
| 8  | checked   |
| 7  | unchecked |
| 1  | unchecked |
