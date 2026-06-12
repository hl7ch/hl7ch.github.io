# ALIS 5.1 XML VisitPauschaleKomplett - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS 5.1 XML VisitPauschaleKomplett**

## Example Binary: ALIS 5.1 XML VisitPauschaleKomplett

This content is an example of the [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md) Logical Model and is not a FHIR Resource

```

<?xml version="1.0" encoding="UTF-8"?>
<Visit>
	<VisitNumber>987654</VisitNumber>
	<PatientID>102</PatientID>
	<PatientName>Tester</PatientName>
	<PatientGivenName>Paul</PatientGivenName>
	<PatientBirthDate>1982-03-22</PatientBirthDate>
	<PatientGender>M</PatientGender>
	<Service Transaction="insert">
		<ServiceDate>2025-03-04T09:00:00Z</ServiceDate>
		<SessionID>1</SessionID>
		<OrderID>2025403-1</OrderID>
		<ReferrerID>007</ReferrerID>
		<ServiceType>LKAAT</ServiceType>
		<ServiceItem>C02.CP.0010</ServiceItem>
		<EnteredDateTime>2025-05-05T10:05:36Z</EnteredDateTime>
		<ProviderID>2400</ProviderID>
		<SectionCode>M600.01</SectionCode>
		<EnteredBy>7653253256988</EnteredBy>
		<ItemNumber>45678</ItemNumber>
		<Quantity>1</Quantity>
		<TPValue>0.85</TPValue>
		<Diagnosis>
			<DiagnosisCode>B01.2</DiagnosisCode>
			<DiagnosisSystem>ICD10</DiagnosisSystem>
			<DiagnosisVersion>ICD-10-GM 2024</DiagnosisVersion>
			<DiagnosisConfidential>0</DiagnosisConfidential>
			<OnSetDateTime>2025-03-04T09:00:00Z</OnSetDateTime>
			<Laterality>l</Laterality>
		</Diagnosis>
		<PersonV40 PersonTyp="ResponsiblePhysician">
			<PersonID>7653253256988</PersonID>
		</PersonV40>
	</Service>
</Visit>
```



## Resource Binary Content

application/fhir+xml:

```
{snip}
```
