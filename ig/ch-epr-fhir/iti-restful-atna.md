# RESTful ATNA - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* **RESTful ATNA**

## RESTful ATNA

This section specifies Swiss national extensions to the Add RESTful ATNA (Query and Feed) supplement, which is [published](https://www.ihe.net/uploadedFiles/Documents/ITI/IHE_ITI_Suppl_RESTful-ATNA.pdf) as an IHE ITI Trial Implementation profile.

### Scope

An EPR App needs to submit audit records according to the IHE ITI profiles. The Add RESTful ATNA (Query and Feed) supplement allows an EPR App to add audit events through a RESTful Feed to the Audit Record Repository.

### Use Cases

No extensions or restrictions to the profile use cases are specified in the Swiss in national extension.

### Actors and Transactions

No extensions or restrictions to the actors and transactions are specified in the Swiss national extension.

This figure shows the actors directly involved in the **Add RESTful ATNA** Profile and the relevant transactions between them.

### ATNA Actor Options

The Audit Record Repository SHALL support the ATX: FHIR Feed Option.

### Required Actor Grouping

This national extension enforces authentication and authorization for access control. Therefore actors of this profile must be grouped with actors of other profiles according to the following table:

| | | | |
| :--- | :--- | :--- | :--- |
| Audit Record Repository | [IUA Resource Server](iti-iua.md#actors-and-transactions) | R | - |
| Any Actor grouped with Secure Node or Secure Application | [IUA Authorization Client](iti-iua.md#actors-and-transactions) | R | - |

Table 1: Grouping of actors required by this national extension.
### Security Consideration

This national extension enforces authentication and authorization of access to the Patient Identifier Cross-reference Manager using the IUA profile as described in [IUA](iti-71.md).

