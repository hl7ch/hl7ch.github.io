# Module Questionnaire Appointment - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Appointment**

## Questionnaire: Module Questionnaire Appointment 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-appointment | *Version*:3.0.2 |
| Active as of 2022-05-04 | *Computable Name*:ModuleQuestionnaireOrderAppointment |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-appointment",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-appointment",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderAppointment",
  "title" : "Module Questionnaire Order Appointment",
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
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "linkIdPrefix",
            "language" : "text/fhirpath",
            "expression" : "'appointment.location.'"
          }
        }
      ],
      "linkId" : "appointment.location",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.participant.actor",
      "text" : "Ort der Durchführung",
      "type" : "group",
      "item" : [
        {
          "linkId" : "appointment.location.name",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location#Location.name",
          "text" : "Name",
          "type" : "string",
          "required" : true
        },
        {
          "linkId" : "appointment.location.phone",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location#Location.telecom",
          "text" : "Telefon",
          "type" : "string"
        },
        {
          "linkId" : "appointment.location.email",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location#Location.telecom",
          "text" : "E-Mail",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address|3.0.1"
            }
          ],
          "linkId" : "appointment.location.1",
          "text" : "Unable to resolve 'address' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "appointment.requestedPeriod",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.requestedPeriod",
      "text" : "Datum und Zeit, wann der Termin bevorzugt geplant werden soll",
      "type" : "group",
      "item" : [
        {
          "linkId" : "appointment.requestedPeriod.start",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.requestedPeriod.start",
          "text" : "Von",
          "type" : "dateTime"
        },
        {
          "linkId" : "appointment.requestedPeriod.end",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.requestedPeriod.end",
          "text" : "Bis",
          "type" : "dateTime"
        }
      ]
    },
    {
      "linkId" : "appointment.status",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.status",
      "text" : "Status",
      "type" : "choice",
      "required" : true,
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/appointmentstatus",
            "code" : "proposed",
            "display" : "Wunsch des Patienten (vorgeschlagen)"
          },
          "initialSelected" : true
        },
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/appointmentstatus",
            "code" : "pending",
            "display" : "Vom Patienten bestätigt, aber vom Leistungserbringer noch nicht (ausstehend)"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/appointmentstatus",
            "code" : "booked",
            "display" : "Vom Patienten und Leistungserbringer bestätigt (gebucht)"
          }
        }
      ]
    },
    {
      "linkId" : "appointment.patientInstruction",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.patientInstruction",
      "text" : "Patienteninformation für diesen Termin",
      "type" : "string"
    }
  ]
}

```
