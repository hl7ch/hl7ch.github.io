# Immunization Recommendation Request Message - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **Immunization Recommendation Request Message**

## Immunization Recommendation Request Message

The **Immunization Recommendation Request Message** describes the content and format of an Immunization Recommendation Request containing all relevant data to be able to get an immunization recommendation from the clinical decision support system including also original representations of the resulting recommendations of the CDS system.

### Immunization Recommendation workflow

Have a look at the [CDS for immunization recommendation](CDS-immunization-recommendation.md) page for more details about the recommendations in the context of the vaccination/immunization process/workflow.

### FHIR message (Bundle)

This exchange format is defined as a message type that corresponds to a Bundle as a FHIR resource. A Bundle has a list of entries. The first entry is the MessageHeader, in which all contained entries are then referenced.

#### Examples

* [1.4 ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md): [XML](Bundle-1-4-ImmunizationRecommendationRequest.xml), [JSON](Bundle-1-4-ImmunizationRecommendationRequest.json)
* [2.4 ImmunizationRecommendationRequestMessageHeader](MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.md): [XML](MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.xml), [JSON](MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.json)
* [3.2 Example Patient (Recommendation)](Patient-3-2-Patient.md): [XML](Patient-3-2-Patient.xml), [JSON](Patient-3-2-Patient.json)

### Resource profiles

* [CH VACD Immunization Recommendation Request Message](StructureDefinition-ch-vacd-recommendation-request-message.md): Definition of the bundle for the immunization recommendation request.
* [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md): Definition of the MessageHeader for the immunization recommendation request.
* [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md): Definition of the immunization part for all documents.
* [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md): Definition of the medical problems part for all documents.
* [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md): Definition of the past illness part for all documents.
* [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md): Definition of the AllergyIntolerance part for all documents.
* [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md): Definition of the labor and serology part for all documents.

