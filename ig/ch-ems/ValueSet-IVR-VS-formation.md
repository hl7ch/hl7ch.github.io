# IVR Formation - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Formation**

## ValueSet: IVR Formation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-formation | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSformation |
| **Copyright/Legal**: CC0-1.0 | |

 
List of the formation of rescue personnel. 

 **References** 

* [CH EMS Practitioner](StructureDefinition-ch-ems-practitioner.md)
* [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "IVR-VS-formation",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-formation",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSformation",
  "title" : "IVR Formation",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:07:03+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "List of the formation of rescue personnel.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "397897005",
        "display" : "Paramedic",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rettungssanitäter/in HF"
        },
        {
          "language" : "fr-CH",
          "value" : "Ambulanier/ère ES"
        },
        {
          "language" : "it-CH",
          "value" : "Soccoritore SSS"
        }]
      },
      {
        "code" : "159738005",
        "display" : "Ambulanceman",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Transportsanitäter/in FA"
        },
        {
          "language" : "fr-CH",
          "value" : "Technicien ambulancier"
        },
        {
          "language" : "it-CH",
          "value" : "Soccorritore ausiliario d'ambulanza"
        }]
      },
      {
        "code" : "309294001",
        "display" : "Accident and Emergency doctor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Notarzt/Notärztin SGNOR"
        },
        {
          "language" : "fr-CH",
          "value" : "Médecin d'urgence SSMUS"
        },
        {
          "language" : "it-CH",
          "value" : "Medico d'urgenza SSMUS"
        }]
      },
      {
        "code" : "309445003",
        "display" : "Anesthetic nurse",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Anästhesiepfleger/in HF"
        },
        {
          "language" : "fr-CH",
          "value" : "Infirmier/ère en anesthésie"
        },
        {
          "language" : "it-CH",
          "value" : "Infermiere/a anestesista"
        }]
      },
      {
        "code" : "309453006",
        "display" : "Registered midwife",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Hebamme FH"
        },
        {
          "language" : "fr-CH",
          "value" : "Sage femme"
        },
        {
          "language" : "it-CH",
          "value" : "Ostetrica"
        }]
      },
      {
        "code" : "106292003",
        "display" : "Professional nurse",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Pflegefachperson"
        },
        {
          "language" : "fr-CH",
          "value" : "Infirmier/ère"
        },
        {
          "language" : "it-CH",
          "value" : "Infermiere/a"
        }]
      },
      {
        "code" : "224535009",
        "display" : "Registered nurse",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Pflegefachperson FH"
        },
        {
          "language" : "fr-CH",
          "value" : "Infirmier/ère HES"
        },
        {
          "language" : "it-CH",
          "value" : "Infermiere/a SSS"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000010",
        "display" : "paramedic-on-training",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rettungssanitäter/in in Ausbildung"
        },
        {
          "language" : "fr-CH",
          "value" : "Etudiant/e Ambulanier/ère"
        },
        {
          "language" : "it-CH",
          "value" : "Soccorritore in formazione"
        }]
      },
      {
        "code" : "1000011",
        "display" : "Ambulanceman-on-training",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Transportsanitäter/in in Ausbildung"
        },
        {
          "language" : "fr-CH",
          "value" : "Technicien ambulancier en formation"
        },
        {
          "language" : "it-CH",
          "value" : "Soccorritore ausiliario d'ambulanza in formazione"
        }]
      }]
    }]
  }
}

```
