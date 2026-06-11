# Profiles - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* **Profiles**

## Profiles

### Resource Profiles

#### Document Profiles

*  [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md): Definition of the bundle for the immunization administration document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR. 
*  [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md): Definition of the bundle for the vaccination record document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR. 
*  [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md): Definition of the bundle for the immunization recommendation request. 
*  [CH VACD Message Immunization Recommendation Response](StructureDefinition-ch-vacd-recommendation-response-message.md): Definition of the bundle for the immunization recommendation response. 

#### Composition Profiles

*  [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md): Definition of the composition for the immunization administration document. 
*  [CH VACD VaccinationRecord Composition](StructureDefinition-ch-vacd-composition-vaccination-record.md): Definition of the composition for the vaccination record document. 
*  [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md): Definition of the MessageHeader for the immunization recommendation request. 
*  [CH VACD Immunization Recommendation Response MessageHeader](StructureDefinition-ch-vacd-recommendation-response-messageheader.md): Definition of the MessageHeader for the immunization recommendation response. 

#### Common Profiles

*  [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md): Definition of the AllergyIntolerance part for vaccination record documents. 
*  [CH VACD Basic Immunization](StructureDefinition-ch-vacd-basic-immunization.md): Condition to declare Basic Immunization done by one single condition for the declared vaccinations according to the ValueSet [Basic Immunization Codes](ValueSet-ch-vacd-basic-immunization-vs.md). This is for cases the patient does not have a vaccination certificate to declare, but knows that it is done. 
*  [CH VACD Immunization Recommendations](StructureDefinition-ch-vacd-immunization-recommendation.md): Definition of the immunization recommendation part for all documents. 
*  [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md): Definition of the immunization part for all documents. 
*  [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md): Definition of the labor and serology part for all documents. 
*  [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md): Definition of the medical problems part for all documents. 
*  [CH VACD Medication For Immunization](StructureDefinition-ch-vacd-medication-for-immunization.md): Definition of the medication for immunization. 
*  [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md): Definition of the past illness part for all documents. 
*  [CH VACD Travel Information](StructureDefinition-ch-vacd-travel-information.md): Travel Information for ImmunizationRecommendation for travel vaccinations. 
*  [CH VACD Travel Location](StructureDefinition-ch-vacd-travel-location.md): Travel Location for ImmunizationRecommendation for travel vaccinations. 

### Data Type Profiles

*  [CH VACD Travel Location Address](StructureDefinition-ch-vacd-travel-location-address.md): Datatype for travel location address 

