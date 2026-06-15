# IVR Respiration Observation - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Respiration Observation**

## ValueSet: IVR Respiration Observation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-respirationObservation | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSrespirationObservation |
| **Copyright/Legal**: CC0-1.0 | |

 
List of findings in the assessment of breathing. 

 **References** 

* [CH EMS Observation: Breathing](StructureDefinition-ch-ems-observation-breathing.md)
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
  "id" : "IVR-VS-respirationObservation",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-respirationObservation",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSrespirationObservation",
  "title" : "IVR Respiration Observation",
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
  "description" : "List of findings in the assessment of breathing.",
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
        "code" : "1023001",
        "display" : "Apnea",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Apnoe"
        },
        {
          "language" : "fr-CH",
          "value" : "Apnée"
        },
        {
          "language" : "it-CH",
          "value" : "Apnea"
        }]
      },
      {
        "code" : "267036007",
        "display" : "Dyspnea",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Dispnoe"
        },
        {
          "language" : "fr-CH",
          "value" : "Dyspnée"
        },
        {
          "language" : "it-CH",
          "value" : "Dispnea"
        }]
      },
      {
        "code" : "86684002",
        "display" : "Bradypnea",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bradypnoe"
        },
        {
          "language" : "fr-CH",
          "value" : "Bradypnée"
        },
        {
          "language" : "it-CH",
          "value" : "Bradipnea"
        }]
      },
      {
        "code" : "271823003",
        "display" : "Tachypnea",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Tachypnoe"
        },
        {
          "language" : "fr-CH",
          "value" : "Tachypnée"
        },
        {
          "language" : "it-CH",
          "value" : "Tachipnea"
        }]
      },
      {
        "code" : "23141003",
        "display" : "Gasping respiration",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Schnappatmung"
        },
        {
          "language" : "fr-CH",
          "value" : "Respiration agonale"
        },
        {
          "language" : "it-CH",
          "value" : "Respiro agonico"
        }]
      },
      {
        "code" : "3415004",
        "display" : "Cyanosis",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Zyanose"
        },
        {
          "language" : "fr-CH",
          "value" : "Cyanose"
        },
        {
          "language" : "it-CH",
          "value" : "Cianosi"
        }]
      },
      {
        "code" : "221360009",
        "display" : "Spasticity",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Spastik"
        },
        {
          "language" : "fr-CH",
          "value" : "Spastique"
        },
        {
          "language" : "it-CH",
          "value" : "Spastico"
        }]
      },
      {
        "code" : "44416002",
        "display" : "Airway constriction",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Atemwegsverlegung"
        },
        {
          "language" : "fr-CH",
          "value" : "Obstruction des voies aériennes"
        },
        {
          "language" : "it-CH",
          "value" : "Ostruzione delle vie aeree"
        }]
      },
      {
        "code" : "58840004",
        "display" : "Decreased breath sounds",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Atemgeräusch abgeschwächt"
        },
        {
          "language" : "fr-CH",
          "value" : "Murmure vésiculaire atténué"
        },
        {
          "language" : "it-CH",
          "value" : "Murmore vescicolare attenuato"
        }]
      },
      {
        "code" : "65949001",
        "display" : "Increased breath sounds",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Atemgeräusch verschärft"
        },
        {
          "language" : "fr-CH",
          "value" : "Augmentation des bruits respiratoires"
        },
        {
          "language" : "it-CH",
          "value" : "Aumento rumore respiratorio"
        }]
      },
      {
        "code" : "371820004",
        "display" : "Patient ventilated",
        "designation" : [{
          "language" : "de-CH",
          "value" : "beatmet"
        },
        {
          "language" : "fr-CH",
          "value" : "ventilé"
        },
        {
          "language" : "it-CH",
          "value" : "ventilato"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000075",
        "display" : "Stridor links",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Stridor links"
        },
        {
          "language" : "fr-CH",
          "value" : "Stridor à gauche"
        },
        {
          "language" : "it-CH",
          "value" : "Stridore a sinistra"
        }]
      },
      {
        "code" : "100076",
        "display" : "Stridor rechts",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Stridor rechts"
        },
        {
          "language" : "fr-CH",
          "value" : "Stridor à droite"
        },
        {
          "language" : "it-CH",
          "value" : "Stridore a destra"
        }]
      },
      {
        "code" : "1000077",
        "display" : "Respiratory crackles left",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rasselgeräusche links"
        },
        {
          "language" : "fr-CH",
          "value" : "Râles à gauche"
        },
        {
          "language" : "it-CH",
          "value" : "Crepitii a sinistra"
        }]
      },
      {
        "code" : "1000078",
        "display" : "Respiratory crackles right",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rasselgeräusche rechts"
        },
        {
          "language" : "fr-CH",
          "value" : "Râles à droite"
        },
        {
          "language" : "it-CH",
          "value" : "Crepitii a destra"
        }]
      }]
    }]
  }
}

```
