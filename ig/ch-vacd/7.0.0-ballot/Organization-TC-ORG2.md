# TC Organization 2 - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC Organization 2**

## Organization: TC Organization 2

Profile: [CH Core Organization EPR](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization-epr.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601999999912

**name**: Praxis Dr. G. Meier

**telecom**: ph: tel:+41.32.234.77.88(Work), [mailto:leitung@praxis-gesund.ch](mailto:mailto:leitung@praxis-gesund.ch), [http://www.praxis-gesund.ch](http://www.praxis-gesund.ch)

**address**: Werthgasse 34 Bern ZH 3000 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "TC-ORG2",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601999999912"
  }],
  "name" : "Praxis Dr. G. Meier",
  "telecom" : [{
    "system" : "phone",
    "value" : "tel:+41.32.234.77.88",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "mailto:leitung@praxis-gesund.ch",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "http://www.praxis-gesund.ch",
    "use" : "work"
  }],
  "address" : [{
    "line" : ["Werthgasse 34"],
    "city" : "Bern",
    "state" : "ZH",
    "postalCode" : "3000",
    "country" : "CH"
  }]
}

```
