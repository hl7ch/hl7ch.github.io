# Module Questionnaire Order - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Order**

## Questionnaire: Module Questionnaire Order 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-order | *Version*:3.0.2 |
| Active as of 2022-05-04 | *Computable Name*:ModuleQuestionnaireOrderForm |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-order",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-order",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderForm",
  "title" : "Module Questionnaire Order Form",
  "status" : "active",
  "date" : "2022-05-04",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
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
      "linkId" : "order.authoredOn",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.authoredOn",
      "text" : "Datum/Zeit der Auftragserteilung",
      "type" : "dateTime"
    },
    {
      "linkId" : "order.placerOrderIdentifier",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.identifier",
      "text" : "Auftragsnummer des Auftraggebers",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-hidden",
          "valueBoolean" : true
        }
      ],
      "linkId" : "order.placerOrderIdentifierDomain",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.identifier",
      "text" : "Identifier Domain der Auftragsnummer des Auftraggebers",
      "type" : "string"
    },
    {
      "linkId" : "order.fillerOrderIdentifier",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.identifier",
      "text" : "Auftragsnummer des Auftragsempfängers",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-hidden",
          "valueBoolean" : true
        }
      ],
      "linkId" : "order.fillerOrderIdentifierDomain",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.identifier",
      "text" : "Identifier Domain der Auftragsnummer des Auftragsempfängers",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-hidden",
          "valueBoolean" : true
        }
      ],
      "linkId" : "order.precedentDocumentIdentifier",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Identifier des Vorgängerdokuments",
      "type" : "string"
    },
    {
      "linkId" : "order.notificationContactDocument",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Dringender Benachrichtigungskontakt für dieses Dokument",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'order.notificationContactDocument.practitioner.'"
              }
            }
          ],
          "linkId" : "order.notificationContactDocument.practitioner",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
          "text" : "Zu benachrichtigende Person",
          "type" : "group",
          "item" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
                  "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-practitioner-nametel|3.0.1"
                }
              ],
              "linkId" : "order.notificationContactDocument.practitioner.1",
              "text" : "Unable to resolve 'practitioner-nametel' sub-questionnaire",
              "type" : "display"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "order.notificationContactDocumentResponse",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Dringender Benachrichtigungskontakt für die Antwort auf dieses Dokument",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'order.notificationContactDocumentResponse.practitioner.'"
              }
            }
          ],
          "linkId" : "order.notificationContactDocumentResponse.practitioner",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
          "text" : "Zu benachrichtigende Person",
          "type" : "group",
          "item" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
                  "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-practitioner-nametel|3.0.1"
                }
              ],
              "linkId" : "order.notificationContactDocumentResponse.practitioner.1",
              "text" : "Unable to resolve 'practitioner-nametel' sub-questionnaire",
              "type" : "display"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "order.priority",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.priority",
      "text" : "Auftragspriorität",
      "type" : "choice",
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/request-priority",
            "code" : "routine",
            "display" : "Die Anfrage hat normale Priorität."
          },
          "initialSelected" : true
        },
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/request-priority",
            "code" : "urgent",
            "display" : "Die Anfrage sollte dringend bearbeitet werden - höhere Priorität als normal."
          }
        },
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/request-priority",
            "code" : "asap",
            "display" : "Die Anfrage sollte so schnell wie möglich bearbeitet werden - höhere Priorität als dringend."
          }
        },
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/request-priority",
            "code" : "stat",
            "display" : "Die Anfrage sollte sofort bearbeitet werden - höchstmögliche Priorität. Z.B. bei einem Notfall."
          }
        }
      ]
    }
  ]
}

```
