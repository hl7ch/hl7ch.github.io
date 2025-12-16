# Immunization Recommendation Response Message - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **Immunization Recommendation Response Message**

## Immunization Recommendation Response Message

The **Immunization Recommendation Response Message** describes the content and format of an Immunization Recommendation Response containing all immunization recommendations which can be made based on the data delivered by the immunization recommendation request. The response may include all data of the request in addition to the ImmunizationRecommendations.

### Immunization Recommendation workflow

Have a look at the [CDS for immunization recommendation](CDS-immunization-recommendation.md) page for more details about the recommendations in the context of the vaccination/immunization process/workflow.

### FHIR message (Bundle)

This exchange format is defined as a message type that corresponds to a Bundle as a FHIR resource. A Bundle has a list of entries. The first entry is the MessageHeader, in which all contained entries are then referenced.

#### Examples

* [1.5 ImmunizationRecommendationResponse](Bundle-1-5-ImmunizationRecommendationResponse.md): [XML](Bundle-1-5-ImmunizationRecommendationResponse.xml), [JSON](Bundle-1-5-ImmunizationRecommendationResponse.json)
* [2.5 ImmunizationRecommendationResponseMessageHeader](MessageHeader-2-5-ImmunizationRecommendationResponseMessageHeader.md): [XML](MessageHeader-2-5-ImmunizationRecommendationResponseMessageHeader.xml),[JSON](MessageHeader-2-5-ImmunizationRecommendationResponseMessageHeader.json)
* [3.2 Example Patient (Recommendation)](Patient-3-2-Patient.md): [XML](Patient-3-2-Patient.xml), [JSON](Patient-3-2-Patient.json)
* [10.3. ImmunizationRecommendation](ImmunizationRecommendation-10-3-ImmunizationRecommendation.md): [XML](ImmunizationRecommendation-10-3-ImmunizationRecommendation.xml), [JSON](ImmunizationRecommendation-10-3-ImmunizationRecommendation.json)
* [10.4. ImmunizationRecommendation](ImmunizationRecommendation-10-4-ImmunizationRecommendation.md): [XML](ImmunizationRecommendation-10-4-ImmunizationRecommendation.xml), [JSON](ImmunizationRecommendation-10-4-ImmunizationRecommendation.json)

### Resource profiles

* [CH VACD Immunization Recommendation Response Message](StructureDefinition-ch-vacd-recommendation-response-message.md) Definition of the bundle for the immunization recommendation response.
* [CH VACD Immunization Recommendation Response MessageHeader](StructureDefinition-ch-vacd-recommendation-response-messageheader.md): Definition of the messageheader for the immunization recommendation response.
* [CH VACD Immunization Recommendation](StructureDefinition-ch-vacd-immunization-recommendation.md): Definition of the immunization recommendation part for immunization recommendation request and response documents.

