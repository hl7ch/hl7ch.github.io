# ConsentProvisionCodesCS - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConsentProvisionCodesCS**

## CodeSystem: ConsentProvisionCodesCS 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ConsentProvisionCodesCS | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:ConsentProvisionCodesCS |
| **Copyright/Legal**: CC0-1.0 | |

 
Code System for Consents that are specificaly used in Switzerland 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ConsentProvisionCodesVS](ValueSet-ConsentProvisionCodesVS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ConsentProvisionCodesCS",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ConsentProvisionCodesCS",
  "version" : "7.0.0-ballot",
  "name" : "ConsentProvisionCodesCS",
  "title" : "ConsentProvisionCodesCS",
  "status" : "active",
  "date" : "2026-06-10T15:05:01+00:00",
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
  "description" : "Code System for Consents that are specificaly used in Switzerland",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "GC",
    "display" : "General Consent",
    "definition" : "The General Consent is a consent form in which the patient agrees to the further use of health data and biological samples collected by the institution \n    for certain research purposes. It must be signed by the patient or a legal representative and is based on the unimedsuisse template.\n    Further information can be found at: https://swissethics.ch/documents/generalkonsent"
  },
  {
    "code" : "PATPORTAL",
    "display" : "Patient Portal",
    "definition" : "Consent given by a patient or legal representative to participate in the patient portal. The patient consents to sharing of their protected health information\n    between the patient portal and the healthcare facility as specified in the agreement."
  }]
}

```
