# Business Rules - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* **Business Rules**

## Business Rules

This case-insensitive code system `http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-foph-business-rules` defines the following codes in a Is-A hierarchy:

* **Lvl**: 1
  * **Code**: information
  * **Display**: Information
  * **Definition**: A purely informational message.
* **Lvl**: 2
  * **Code**:   FOPH-000
  * **Display**: Generic Information
  * **Definition**: 
* **Lvl**: 1
  * **Code**: warning
  * **Display**: Warning
  * **Definition**: If the rule is violated, the resource is conformant, but it is not necessarily following best practice.
* **Lvl**: 2
  * **Code**:   FOPH-014
  * **Display**: The patient address state element should contain a two letter canton code.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-017
  * **Display**: The combination of postal code & city in the patient address element could not be found in the FOPH location database.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-005
  * **Display**: The required anonymization for the reported organism was violated. The following field(s) are affected: %fields%
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-011
  * **Display**: The material is already specified by the leading code. The additional material specified in specimen.type will be ignored.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-010
  * **Display**: Attention, the code %code% (%codeSystem%) expires on %validTo%. Please adjust your systems by this date.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-019
  * **Display**: The combination of postal code & city in the practitioner orderer address element could not be found in the FOPH location database.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-018
  * **Display**: The combination of postal code & city in the organization orderer address element could not be found in the FOPH location database.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-001
  * **Display**: Generic Warning
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-006
  * **Display**: The following elements for the patient's address are expected: %missingElements%.
  * **Definition**: 
* **Lvl**: 1
  * **Code**: error
  * **Display**: Error
  * **Definition**: If the rule is violated, the resource is not conformant.
* **Lvl**: 2
  * **Code**:   FOPH-009
  * **Display**: The transmitted code %code% (%codeSystem%) is outside the defined validity period %validFrom% - %validTo%.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-016
  * **Display**: The country code specified under patient address could not resolved. An ISO 3166 2 or 3 letter code is expected.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-002
  * **Display**: Generic Error
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-007
  * **Display**: The specified material is not supported by the provided leading code.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-012
  * **Display**: The transmitted leading code %code% (%codeSystem%) could not be found in the current value set.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-008
  * **Display**: The specified organism is not supported by the provided leading code.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-004
  * **Display**: The provided laboratory identification "%identifier%" is either unknown or corresponds to a laboratory for which your account does not have reporting permissions. Please verify your laboratory identification. If it's correct, complete the necessary onboarding process before submitting data on behalf of this lab.
  * **Definition**: 
* **Lvl**: 2
  * **Code**:   FOPH-013
  * **Display**: The transmitted code %code% (%codeSystem%) is outside the defined validity period.
  * **Definition**: 

