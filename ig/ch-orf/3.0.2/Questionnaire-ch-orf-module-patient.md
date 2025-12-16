# Module Questionnaire Patient - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Patient**

## Questionnaire: Module Questionnaire Patient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-patient | *Version*:3.0.2 |
| Active as of 2022-05-04 | *Computable Name*:ModuleQuestionnaireOrderPatient |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-patient",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-patient",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderPatient",
  "title" : "Module Questionnaire Order Patient",
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
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.name.where(use='official').family"
          }
        }
      ],
      "linkId" : "patient.familyName",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.name.family",
      "text" : "Name",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.name.where(use='maiden').family"
          }
        }
      ],
      "linkId" : "patient.maidenName",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.name.family",
      "text" : "Ledigname",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.name.where(use='official').given"
          }
        }
      ],
      "linkId" : "patient.givenName",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.name.given",
      "text" : "Vorname",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.identifier.where(type.coding.where(system='http://terminology.hl7.org/CodeSystem/v2-0203' and code='MR').exists()).value"
          }
        }
      ],
      "linkId" : "patient.localPid",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.identifier:LocalPid.value",
      "text" : "Lokale Patienten-ID",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-hidden",
          "valueBoolean" : true
        }
      ],
      "linkId" : "patient.localPidDomain",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.identifier:LocalPid.system",
      "text" : "Lokale Patienten-ID Domain",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.birthDate"
          }
        }
      ],
      "linkId" : "patient.birthDate",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.birthDate",
      "text" : "Geburtsdatum",
      "type" : "date"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%questionnaire.repeat(item).where(linkId='patient.gender').answerOption.valueCoding.where(code=%patient.gender)"
          }
        }
      ],
      "linkId" : "patient.gender",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.gender",
      "text" : "Geschlecht",
      "type" : "choice",
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/administrative-gender",
            "code" : "male",
            "display" : "Männlich"
          },
          "initialSelected" : true
        },
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/administrative-gender",
            "code" : "female",
            "display" : "Weiblich"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/administrative-gender",
            "code" : "other",
            "display" : "Anderes"
          }
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.maritalStatus"
          }
        }
      ],
      "linkId" : "patient.maritalStatus",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.maritalStatus",
      "text" : "Zivilstand",
      "type" : "choice",
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
            "code" : "1",
            "display" : "ledig"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
            "code" : "2",
            "display" : "verheiratet"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
            "code" : "3",
            "display" : "verwitwet"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
            "code" : "4",
            "display" : "geschieden"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
            "code" : "5",
            "display" : "unverheiratet"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
            "code" : "6",
            "display" : "in eingetragener Partnerschaft"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
            "code" : "7",
            "display" : "aufgelöste Partnerschaft"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
            "code" : "9",
            "display" : "unbekannt"
          }
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.telecom.where(system='phone').value"
          }
        }
      ],
      "linkId" : "patient.phone",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.telecom.value",
      "text" : "Telefon",
      "type" : "string",
      "repeats" : true
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.telecom.where(system='email').value"
          }
        }
      ],
      "linkId" : "patient.email",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.telecom.value",
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
      "linkId" : "address.1",
      "text" : "Unable to resolve 'address' sub-questionnaire",
      "type" : "display"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%patient.communication.where(preferred=true).language.coding"
          }
        }
      ],
      "linkId" : "patient.languageOfCorrespondence",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.communication:languageOfCorrespondence",
      "text" : "Korrespondenzsprache",
      "type" : "choice",
      "answerValueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.languageCode"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "contact",
            "language" : "text/fhirpath",
            "expression" : "%patient.contact"
          }
        }
      ],
      "linkId" : "patient.contactperson",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact",
      "text" : "Kontaktperson",
      "type" : "group",
      "repeats" : true,
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%contact.relationship.text"
              }
            }
          ],
          "linkId" : "patient.contactperson.relationship",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.relationship.text",
          "text" : "Beziehung",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%contact.name.family"
              }
            }
          ],
          "linkId" : "patient.contactperson.familyName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.name.family",
          "text" : "Name",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%contact.name.given"
              }
            }
          ],
          "linkId" : "patient.contactperson.givenName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.name.given",
          "text" : "Vorname",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%contact.telecom.where(system='phone').value"
              }
            }
          ],
          "linkId" : "patient.contactperson.phone",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.telecom.value",
          "text" : "Telefon",
          "type" : "string",
          "repeats" : true
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%contact.telecom.where(system='email').value"
              }
            }
          ],
          "linkId" : "patient.contactperson.email",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.telecom.value",
          "text" : "E-Mail",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "familydoctor",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.generalPractitioner",
      "text" : "Hausarzt",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-familydoctor|3.0.1"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'familydoctor.'"
              }
            }
          ],
          "linkId" : "patientfamilydoctor.1",
          "text" : "Unable to resolve 'familydoctor' sub-questionnaire",
          "type" : "display"
        }
      ]
    }
  ]
}

```
