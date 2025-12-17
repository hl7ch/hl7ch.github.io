# Module Questionnaire Instruction - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Instruction**

## Questionnaire: Module Questionnaire Instruction 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-medinfo | *Version*:2.0.1 |
| Active as of 2024-03-02 | *Computable Name*:ModuleQuestionnaireRadiologyOrderInstruction |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-rad-order-module-medinfo",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-medinfo",
  "version" : "2.0.1",
  "name" : "ModuleQuestionnaireRadiologyOrderInstruction",
  "title" : "Module Questionnaire Radiologyorder Instruction",
  "status" : "active",
  "date" : "2024-03-02",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "item" : [
    {
      "linkId" : "requestedService",
      "text" : "Angeforderte Leistung",
      "type" : "group",
      "required" : true,
      "item" : [
        {
          "linkId" : "requestedService.service",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.category",
          "text" : "Leistung",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-requested-service"
        }
      ]
    },
    {
      "linkId" : "reason",
      "text" : "Klinische Fragestellung",
      "type" : "group",
      "item" : [
        {
          "linkId" : "reason.question",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.reasonCode",
          "text" : "Fragestellung",
          "type" : "string",
          "repeats" : true
        }
      ]
    },
    {
      "linkId" : "imagingService",
      "text" : "Bildgebendes Verfahren",
      "type" : "group",
      "item" : [
        {
          "linkId" : "imagingService.type",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.code",
          "text" : "Art",
          "type" : "choice",
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-modality-type"
        }
      ]
    },
    {
      "linkId" : "orderDetail",
      "text" : "Weitere Angaben zur Bildgebung",
      "type" : "group",
      "item" : [
        {
          "linkId" : "orderDetail.imagingRegion",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequestServiceRequest.orderDetail:imagingRegion",
          "text" : "Region",
          "type" : "choice",
          "repeats" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-imaging-region"
        },
        {
          "linkId" : "orderDetail.imagingFocus",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.bodySite",
          "text" : "Fokus",
          "type" : "choice",
          "repeats" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-imaging-focus"
        },
        {
          "linkId" : "orderDetail.laterality",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions.html#ServiceRequest.orderDetail:laterality",
          "text" : "Seitenangabe",
          "type" : "choice",
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-laterality"
        },
        {
          "linkId" : "orderDetail.viewType",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#orderDetail:viewType",
          "text" : "Ansicht",
          "type" : "choice",
          "repeats" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-view-type"
        },
        {
          "linkId" : "orderDetail.maneuverType",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#orderDetail:maneuverType",
          "text" : "Manöver",
          "type" : "choice",
          "repeats" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-maneuver-type"
        },
        {
          "linkId" : "orderDetail.guidanceForAction",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#orderDetail:guidanceForAction",
          "text" : "Handlungsanleitung",
          "type" : "choice",
          "enableWhen" : [
            {
              "question" : "requestedService.service",
              "operator" : "=",
              "answerCoding" : {
                "system" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-requested-service",
                "code" : "RadIntervention"
              }
            },
            {
              "question" : "requestedService.service",
              "operator" : "=",
              "answerCoding" : {
                "system" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-requested-service",
                "code" : "ImagingRequestWithIntervention"
              }
            }
          ],
          "enableBehavior" : "any",
          "repeats" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-guidance-for-action"
        }
      ]
    },
    {
      "linkId" : "desiredRadiologist",
      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#performer",
      "text" : "Gewünschter Radiologe für die Befundung / für die Intervention",
      "type" : "group",
      "item" : [
        {
          "linkId" : "desiredRadiologist.familyName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
          "text" : "Name",
          "type" : "string"
        },
        {
          "linkId" : "desiredRadiologist.givenName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
          "text" : "Vorname",
          "type" : "string"
        }
      ]
    }
  ]
}

```
