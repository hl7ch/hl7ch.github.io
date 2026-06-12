# Swiss Medical Specialties (Fachbereiche) - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swiss Medical Specialties (Fachbereiche)**

## CodeSystem: Swiss Medical Specialties (Fachbereiche) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/CodeSystem/swiss-medical-specialties | *Version*:1.0.0-ballot |
| Active as of 2026-01-01 | *Computable Name*:SwissMedicalSpecialties |
| **Copyright/Legal**: CC0-1.0 | |

 
Code system for Swiss medical specialty areas (Fachbereiche) used in ambulatory care settings. Based on the regulation document 'Reglement Fachbereiche inkl. Liste der Fachbereiche' valid from January 1, 2026. Declared as fragment: only the codes actually referenced in this IG are listed here. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SwissMedicalSpecialities](ValueSet-SwissMedicalSpecialities.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "swiss-medical-specialties",
  "url" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/swiss-medical-specialties",
  "version" : "1.0.0-ballot",
  "name" : "SwissMedicalSpecialties",
  "title" : "Swiss Medical Specialties (Fachbereiche)",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-01",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Code system for Swiss medical specialty areas (Fachbereiche) used in ambulatory care settings. Based on the regulation document 'Reglement Fachbereiche inkl. Liste der Fachbereiche' valid from January 1, 2026. Declared as fragment: only the codes actually referenced in this IG are listed here.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "hierarchyMeaning" : "is-a",
  "compositional" : false,
  "versionNeeded" : false,
  "content" : "fragment",
  "property" : [{
    "code" : "notSelectable",
    "uri" : "http://hl7.org/fhir/concept-properties#notSelectable",
    "description" : "Selektierbar",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "M400",
    "display" : "Pädiatrie",
    "property" : [{
      "code" : "notSelectable",
      "valueBoolean" : true
    }],
    "concept" : [{
      "code" : "M400.04",
      "display" : "Neonatologie"
    }]
  },
  {
    "code" : "M600",
    "display" : "Ophthalmologie",
    "property" : [{
      "code" : "notSelectable",
      "valueBoolean" : true
    }],
    "concept" : [{
      "code" : "M600.01",
      "display" : "Ophthalmologie"
    }]
  },
  {
    "code" : "M850",
    "display" : "Medizinische Radiologie",
    "property" : [{
      "code" : "notSelectable",
      "valueBoolean" : true
    }],
    "concept" : [{
      "code" : "M850.04",
      "display" : "Radiologie"
    }]
  },
  {
    "code" : "M990",
    "display" : "Weitere Tätigkeitsgebiete",
    "property" : [{
      "code" : "notSelectable",
      "valueBoolean" : true
    }],
    "concept" : [{
      "code" : "M990.06",
      "display" : "Labor"
    }]
  }]
}

```
