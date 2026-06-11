# TC HCP1 C1 - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC HCP1 C1**

## Example Practitioner: TC HCP1 C1

Profile: [CH Core Practitioner EPR](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-practitioner-epr.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601888888884

**active**: true

**name**: Peter Müller 

**telecom**: ph: tel:+41.32.234.55.66(Work), [mailto:allzeit.bereit@gruppenpraxis.ch](mailto:mailto:allzeit.bereit@gruppenpraxis.ch), [http://www.gruppenpraxis.ch](http://www.gruppenpraxis.ch)

**address**: Grabenstrasse 2 Zürich 8005 CH 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "TC-HCP1-C1",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601888888884"
  }],
  "active" : true,
  "name" : [{
    "family" : "Müller",
    "given" : ["Peter"],
    "prefix" : ["Dr. med."]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "tel:+41.32.234.55.66",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "mailto:allzeit.bereit@gruppenpraxis.ch",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "http://www.gruppenpraxis.ch",
    "use" : "work"
  }],
  "address" : [{
    "type" : "physical",
    "line" : ["Grabenstrasse 2"],
    "city" : "Zürich",
    "postalCode" : "8005",
    "country" : "CH"
  }]
}

```
